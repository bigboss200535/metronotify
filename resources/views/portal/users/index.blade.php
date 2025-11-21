<x-app-layout>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Users</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Users</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				    
				<!-- Simple Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						
						  <a href="#" class="btn-block pull-right">
						  	<h4 class="text-blue h4">System Users</h4>
							<input type="button" name="app_button" data-toggle="modal" data-target="#appointment_register" id="app_button" class="btn btn-primary pull-right" value="Add User">
						</a>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
									<th>S/N</th>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Email</th>
									<th>Status</th>
									<th>Date Added</th>
									<!-- <th>Start Date</th> -->
									<th class="datatable-nosort">Action</th>
								</tr>
							</thead>
							<tbody>
							@php
                              $counter = 1;
                              @endphp

                             @foreach($users as $user)
								<tr>
									<td>{{ $counter++ }}</td>
									<td class="table-plus">{{ $user->firstname }} {{ $user->othername }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $user->status }}</td>
									<td>{{ \Carbon\Carbon::parse($user->added_date)->format('d-m-Y') }}</td>
									<td>
										<div class="dropdown">
											<a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="dw dw-more"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
												<a class="dropdown-item js-view-user" href="#" data-toggle="modal" data-target="#viewUserModal"
													data-user-id="{{ $user->user_id }}"
													data-firstname="{{ $user->firstname }}"
													data-othername="{{ $user->othername }}"
													data-email="{{ $user->email }}"
													data-telephone="{{ $user->telephone }}"
													data-gender="{{ $user->gender }}"
													data-status="{{ $user->status }}"
													data-added-date="{{ \Carbon\Carbon::parse($user->added_date)->format('d-m-Y') }}"
													data-user-role="{{ $user->user_role }}"
													data-is-blocked="{{ $user->is_blocked ? 'Yes' : 'No' }}">
													<i class="dw dw-eye"></i> View</a>
												<a class="dropdown-item js-edit-user" href="#" data-toggle="modal" data-target="#editUserModal"
													data-user-id="{{ $user->user_id }}"
													data-firstname="{{ $user->firstname }}"
													data-othername="{{ $user->othername }}"
													data-email="{{ $user->email }}"
													data-status="{{ $user->status }}">
													<i class="dw dw-edit2"></i> Edit</a>
												<a class="dropdown-item js-delete-user" href="#" data-toggle="modal" data-target="#deleteUserModal"
													data-user-id="{{ $user->user_id }}"
													data-fullname="{{ $user->firstname }} {{ $user->othername }}">
													<i class="dw dw-delete-3"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								  @endforeach
							</tbody>
							<tfoot>
								<tr>
									<th>S/N</th>
									<th class="table-plus datatable-nosort">Name</th>
									<th>Email</th>
									<th>Status</th>
									<th>Date Added</th>
									<!-- <th>Start Date</th> -->
									<th class="datatable-nosort">Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<!-- Simple Datatable End -->
			</div>
			 
			 
		</div>
	</div>

	<!-- View User Modal -->
	<div class="modal fade" id="viewUserModal" tabindex="-1" role="dialog" aria-labelledby="viewUserLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr><th>Full Name</th><td id="view_fullname"></td></tr>
								<tr><th>Email</th><td id="view_email"></td></tr>
								<tr><th>Telephone</th><td id="view_telephone"></td></tr>
								<tr><th>Gender</th><td id="view_gender"></td></tr>
								<tr><th>Status</th><td id="view_status"></td></tr>
								<tr><th>Role</th><td id="view_role"></td></tr>
								<tr><th>Blocked</th><td id="view_blocked"></td></tr>
								<tr><th>Added Date</th><td id="view_added_date"></td></tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit User Modal -->
	<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form id="editUserForm" method="POST">
				@csrf
				<input type="hidden" name="_method" value="PATCH">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editUserLabel">Edit User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for="edit_firstname">First Name</label>
							<input type="text" name="firstname" id="edit_firstname" class="form-control" maxlength="150">
						</div>
						<div class="form-group">
							<label for="edit_othername">Other Name</label>
							<input type="text" name="othername" id="edit_othername" class="form-control" maxlength="150">
						</div>
						<div class="form-group">
							<label for="edit_email">Email</label>
							<input type="email" name="email" id="edit_email" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="edit_status">Status</label>
							<select name="status" id="edit_status" class="form-control" required>
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-primary">Save Changes</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<!-- Delete User Modal -->
	<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteUserLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<form id="deleteUserForm" method="POST">
				@csrf
				<input type="hidden" name="_method" value="DELETE">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="deleteUserLabel">Delete User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Are you sure you want to delete <strong id="delete_fullname"></strong>?</p>
						<p class="text-muted mb-0">This will archive the user and mark them as inactive.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-danger">Delete</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script>
		(function(){
			function userPath(userId){
				return '/users/' + userId;
			}

			$('.js-view-user').on('click', function(){
				var btn = $(this);
				var fullname = (btn.data('firstname') || '') + ' ' + (btn.data('othername') || '');
				$('#view_fullname').text(fullname.trim());
				$('#view_email').text(btn.data('email') || '');
				$('#view_telephone').text(btn.data('telephone') || '');
				$('#view_gender').text(btn.data('gender') || '');
				$('#view_status').text(btn.data('status') || '');
				$('#view_role').text(btn.data('user-role') || '');
				$('#view_blocked').text(btn.data('is-blocked') || '');
				$('#view_added_date').text(btn.data('added-date') || '');
			});

			$('.js-edit-user').on('click', function(){
				var btn = $(this);
				var userId = btn.data('user-id');
				$('#editUserForm').attr('action', userPath(userId));
				$('#edit_firstname').val(btn.data('firstname') || '');
				$('#edit_othername').val(btn.data('othername') || '');
				$('#edit_email').val(btn.data('email') || '');
				$('#edit_status').val(btn.data('status') || 'Active');
			});

			$('.js-delete-user').on('click', function(){
				var btn = $(this);
				var userId = btn.data('user-id');
				$('#deleteUserForm').attr('action', userPath(userId));
				$('#delete_fullname').text(btn.data('fullname'));
			});
		})();
	</script>
	</x-app-layout>
	