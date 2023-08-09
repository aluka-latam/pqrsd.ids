@extends('layouts.usermaster')

		@section('styles')

		<!-- INTERNAl Summernote css -->
		<link rel="stylesheet" href="{{asset('assets/plugins/summernote/summernote.css')}}?v=<?php echo time(); ?>">

		<!-- INTERNAl Dropzone css -->
		<link href="{{asset('assets/plugins/dropzone/dropzone.css')}}?v=<?php echo time(); ?>" rel="stylesheet" />

		<!-- GALLERY CSS -->
		<link href="{{asset('assets/plugins/simplelightbox/simplelightbox.css')}}?v=<?php echo time(); ?>" rel="stylesheet">

		@endsection

							@section('content')

							<!-- Section -->
							{{-- <section>
								<div class="bannerimg cover-image" data-bs-image-src="{{asset('assets/images/photos/banner1.jpg')}}">
									<div class="header-text mb-0">
										<div class="container ">
											<div class="row text-white">
												<div class="col">
													<h1 class="mb-0">{{trans('langconvert.userdashboard.ticketview')}}</h1>
												</div>
												<div class="col col-auto">
													<ol class="breadcrumb text-center">
														<li class="breadcrumb-item">
															<a href="#" class="text-white-50">{{trans('langconvert.menu.home')}}</a>
														</li>
														<li class="breadcrumb-item active">
															<a href="#" class="text-white">{{trans('langconvert.userdashboard.ticketview')}}</a>
														</li>
													</ol>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section> --}}
							<!-- Section -->

							<!--Ticket Show-->
							<section>
								<div class="cover-image sptb">
									<div class="container ">
										<div class="row">
										
											<div class="col-xl-4">
												<div id="scroll-stickybar" class="w-100 pos-sticky-scroll">
													<div class="card">
														<div class="card-body text-center item-user">
															<div class="profile-pic">
																<div class="profile-pic-img mb-2">
																	<span class="bg-success dots" data-bs-toggle="tooltip" data-placement="top" title=""
																		data-bs-original-title="online"></span>
																	@if (Auth::user()->image == null)

																	<img src="{{asset('uploads/profile/user-profile.png')}}" class="brround avatar-xxl"
																		alt="default">
																	@else

																	<img class="brround avatar-xxl" alt="{{Auth::user()->image}}"
																		src="{{asset('uploads/profile/'.Auth::user()->image)}}">
																	@endif

																</div>
																<a href="#" class="text-dark">
																	<h5 class="mb-1 font-weight-semibold2">{{Auth::user()->username}}</h5>
																</a>
																<small class="text-muted ">{{Auth::user()->email}}</small>
															</div>
														</div>
														<div class="support-sidebar">
															<ul class="side-menu custom-ul">
																<li>
																	<a class="side-menu__item" href="{{route('client.dashboard')}}">
																			<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M3,3v8h8V3H3z M9,9H5V5h4V9z M3,13v8h8v-8H3z M9,19H5v-4h4V19z M13,3v8h8V3H13z M19,9h-4V5h4V9z M13,13v8h8v-8H13z M19,19h-4v-4h4V19z"/></g></g></g></svg><span class="side-menu__label">{{trans('langconvert.menu.dashboard')}}</span></a>
																</li>
																<li>
																	<a class="side-menu__item" href="{{route('client.profile')}}">
																			<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><path d="M0,0h24v24H0V0z" fill="none"/></g><g><g><path d="M4,18v-0.65c0-0.34,0.16-0.66,0.41-0.81C6.1,15.53,8.03,15,10,15c0.03,0,0.05,0,0.08,0.01c0.1-0.7,0.3-1.37,0.59-1.98 C10.45,13.01,10.23,13,10,13c-2.42,0-4.68,0.67-6.61,1.82C2.51,15.34,2,16.32,2,17.35V20h9.26c-0.42-0.6-0.75-1.28-0.97-2H4z"/><path d="M10,12c2.21,0,4-1.79,4-4s-1.79-4-4-4C7.79,4,6,5.79,6,8S7.79,12,10,12z M10,6c1.1,0,2,0.9,2,2s-0.9,2-2,2 c-1.1,0-2-0.9-2-2S8.9,6,10,6z"/><path d="M20.75,16c0-0.22-0.03-0.42-0.06-0.63l1.14-1.01l-1-1.73l-1.45,0.49c-0.32-0.27-0.68-0.48-1.08-0.63L18,11h-2l-0.3,1.49 c-0.4,0.15-0.76,0.36-1.08,0.63l-1.45-0.49l-1,1.73l1.14,1.01c-0.03,0.21-0.06,0.41-0.06,0.63s0.03,0.42,0.06,0.63l-1.14,1.01 l1,1.73l1.45-0.49c0.32,0.27,0.68,0.48,1.08,0.63L16,21h2l0.3-1.49c0.4-0.15,0.76-0.36,1.08-0.63l1.45,0.49l1-1.73l-1.14-1.01 C20.72,16.42,20.75,16.22,20.75,16z M17,18c-1.1,0-2-0.9-2-2s0.9-2,2-2s2,0.9,2,2S18.1,18,17,18z"/></g></g></svg><span class="side-menu__label">{{trans('langconvert.admindashboard.editprofile')}}</span></a>
																</li>
																<li>
																	<a class="side-menu__item" href="{{route('client.ticket')}}">
																			<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><path d="M17,19.22H5V7h7V5H5C3.9,5,3,5.9,3,7v12c0,1.1,0.9,2,2,2h12c1.1,0,2-0.9,2-2v-7h-2V19.22z"/><path d="M19,2h-2v3h-3c0.01,0.01,0,2,0,2h3v2.99c0.01,0.01,2,0,2,0V7h3V5h-3V2z"/><rect height="2" width="8" x="7" y="9"/><polygon points="7,12 7,14 15,14 15,12 12,12"/><rect height="2" width="8" x="7" y="15"/></g></g></svg><span class="side-menu__label">{{trans('langconvert.adminmenu.createticket')}}
																			</span></a>
																</li>
																@if (Auth::guard('customer')->check())
																	<form id="logout-form" action="{{route('client.logout')}}" method="POST">
																			@csrf
						
																			<button type="submit" class="dropdown-item d-flex">
																				<i class="feather feather-power me-3 fs-16 my-auto"></i>
																			<div class="mt-1">{{trans('langconvert.menu.logout')}}</div>
																			</button>
																	</form>
																@endif
																{{-- <li>
																	<a class="side-menu__item" href="{{route('activeticket')}}">
																			<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 10V6c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2v4c1.1 0 1.99.9 1.99 2s-.89 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.9-2-2s.9-2 2-2zm-2-1.46c-1.19.69-2 1.99-2 3.46s.81 2.77 2 3.46V18H4v-2.54c1.19-.69 2-1.99 2-3.46 0-1.48-.8-2.77-1.99-3.46L4 6h16v2.54zM9.07 16L12 14.12 14.93 16l-.89-3.36 2.69-2.2-3.47-.21L12 7l-1.27 3.22-3.47.21 2.69 2.2z"/></svg><span class="side-menu__label">{{trans('langconvert.adminmenu.activetickets')}}
																			</span></a>
																</li>
																<li>
																	<a class="side-menu__item" href="{{route('closedticket')}}">
																			<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><rect fill="none" height="24" width="24"/><path d="M13,10c0-0.55,0.45-1,1-1h3c0.55,0,1,0.45,1,1v1h-1.5v-0.5h-2v1L13,10z M16.5,13.5l1.21,1.21C17.89,14.52,18,14.27,18,14v-1 h-1.5V13.5z M8.83,6H19v10.17l1.98,1.98c0-0.05,0.02-0.1,0.02-0.16V6c0-1.1-0.9-2-2-2H6.83L8.83,6z M19.78,22.61L17.17,20H5 c-1.11,0-2-0.9-2-2V6c0-0.05,0.02-0.1,0.02-0.15L1.39,4.22l1.41-1.41l18.38,18.38L19.78,22.61z M7.5,13.5h2V13h0.67l-2.5-2.5H7.5 V13.5z M15.17,18L11,13.83V14c0,0.55-0.45,1-1,1H7c-0.55,0-1-0.45-1-1v-4c0-0.32,0.16-0.59,0.4-0.78L5,7.83V18H15.17z"/></svg><span class="side-menu__label">{{trans('langconvert.adminmenu.closetickets')}}
																			</span></a>
																</li>
																<li>
																	<a class="side-menu__item" href="{{route('onholdticket')}}">
																		<svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0z" fill="none"/><path d="M22 10V6c0-1.11-.9-2-2-2H4c-1.1 0-1.99.89-1.99 2v4c1.1 0 1.99.9 1.99 2s-.89 2-2 2v4c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2v-4c-1.1 0-2-.9-2-2s.9-2 2-2zm-2-1.46c-1.19.69-2 1.99-2 3.46s.81 2.77 2 3.46V18H4v-2.54c1.19-.69 2-1.99 2-3.46 0-1.48-.8-2.77-1.99-3.46L4 6h16v2.54zM11 15h2v2h-2zm0-4h2v2h-2zm0-4h2v2h-2z"/></svg><span class="side-menu__label">{{trans('langconvert.adminmenu.onholdtickets')}}
																			</span></a>
																</li> --}}
															</ul>
														</div>
													</div>

													{{-- @if($ticket->purchasecode != null)
		
													<!-- Purchase Code Details -->
													<div class="purchasecodes alert alert-light-warning br-13 mb-5">
														<div class="ps-0 pe-0 pb-0">
															<div class="">
																<strong>{{trans('Puchase Code')}} :</strong>
																<span class="">{{ Str::padLeft(Str::substr($ticket->purchasecode, -4), Str::length($ticket->purchasecode), Str::padLeft('*', 1)) }}</span>
																@if($ticket->purchasecodesupport == 'Supported')
						
																<span class="badge badge-success ms-auto float-end">Support Active</span>
																@elseif($ticket->purchasecodesupport == 'Expired')
						
																<span class="badge badge-danger ms-auto float-end">Support Expired</span>
																<p class="mb-0 mt-3">
																<small>Your support for this item has expired. You may still leave a comment but please renew support if you are asking the author for help. View the item support policy</small>
																</p>
																@else
																@endif
																
															</div>	
														</div>
													</div>
													<!-- End Purchase Code Details -->
													
													@endif --}}

													<div class="card">
														<div class="card-header  border-0">
															<div class="card-title">{{trans('langconvert.admindashboard.ticketinformation')}}</div>
															<input type="hidden" name="" data-id="{{$ticket->id}}" id="ticket">
															<div class="float-end ms-auto"><a href="{{route('client.ticket')}}" class="btn btn-white btn-sm ms-auto"><i class="fa fa-paper-plane-o me-2 fs-14"></i>{{trans('langconvert.adminmenu.createticket')}}</a></div>
														</div>
														<div class="card-body pt-2 px-0 pb-0">
															<div class="table-responsive tr-lastchild">
																<table class="table mb-0 table-information">
																	<tbody>
																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.ticketid')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold">#{{ $ticket->ticket_id }}</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.ticketcategory')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				@if ($ticket->category_id != null)

																				<span class="font-weight-semibold">{{ $ticket->category->name }}</span>
																				@endif

																			</td>
																		</tr>
																		@if ($ticket->subcategory != null)
																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.newwordslang.ticketsubcategory')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold">{{ $ticket->subcategories->subcatlists->subcategoryname}}</span>
																				
																			</td>
																		</tr>
																		@endif
																		@if ($ticket->project != null)

																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.ticketproject')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold">{{ $ticket->project }}</span>
																			</td>
																		</tr>
																		@endif

																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.opendate')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				<span class="font-weight-semibold">{{
																					$ticket->created_at->format(setting('date_format'))}}</span>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.status')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				@if($ticket->status == "New")

																				<span class="badge badge-success">{{ $ticket->status }}</span>
																				@elseif($ticket->status == "Re-Open")

																				<span class="badge badge-teal">{{ $ticket->status }}</span>
																				@elseif($ticket->status == "Inprogress")

																				<span class="badge badge-info">{{ $ticket->status }}</span>
																				@elseif($ticket->status == "On-Hold")

																				<span class="badge badge-warning">{{ $ticket->status }}</span>
																				@else

																				<span class="badge badge-danger">{{ $ticket->status }}</span>
																				@endif

																			</td>
																		</tr>
																		@if($ticket->replystatus != null)

																		<tr>
																			<td>
																				<span class="w-50">{{trans('langconvert.admindashboard.replystatus')}}</span>
																			</td>
																			<td>:</td>
																			<td>
																				@if($ticket->replystatus == "Solved")

																				<span class="badge badge-success">{{ $ticket->replystatus }}</span>
																				@elseif($ticket->replystatus == "Unanswered")

																				<span class="badge badge-danger-light">{{ $ticket->replystatus }}</span>
																				@elseif($ticket->replystatus == "Waiting for response")

																				<span class="badge badge-warning">{{ $ticket->replystatus }}</span>
																				@else
																				@endif

																			</td>
																		</tr>
																		@endif

																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-xl-8">
												<div class="card">
													<div class="card-header border-0 mb-1 d-block">
														<div class="d-sm-flex d-block">
															<div>
																<h4 class="card-title mb-1 fs-22">{{ $ticket->subject }} </h4>
															</div>
															<div class="card-options float-sm-end ticket-status">
																@if($ticket->status == "New")
	
																<span class="badge badge-success">{{ $ticket->status }}</span>
																@elseif($ticket->status == "Re-Open")
	
																<span class="badge badge-teal">{{ $ticket->status }}</span>
																@elseif($ticket->status == "Inprogress")
	
																<span class="badge badge-info">{{ $ticket->status }}</span>
																@elseif($ticket->status == "On-Hold")
																
																<span class="badge badge-warning">{{ $ticket->status }}</span>
																@else
	
																<span class="badge badge-danger">{{ $ticket->status }}</span>
																@endif
															</div>
														</div>
														<small class="fs-13"><i class="feather feather-clock text-muted me-1"></i>{{trans('langconvert.admindashboard.lastupdatedon')}} <span class="text-muted">{{$ticket->updated_at->diffForHumans()}}</span></small>
													</div>
													<div class="card-body readmores pt-2 px-6 mx-1"> 
														<div>
															<span>{!! $ticket->message !!}</span>
															<div class="row galleryopen">
																@foreach ($ticket->getMedia('ticket') as $ticketss)
																
																<div class="file-image-1  removespruko{{$ticketss->id}}" id="imageremove{{$ticketss->id}}">
																	<div class="product-image">
																		<a href="{{$ticketss->getFullUrl()}}" class="imageopen">
																			<img src="{{$ticketss->getFullUrl()}}" class="br-5" alt="{{$ticketss->file_name}}">
																		</a>
																	</div>
																	<span class="file-name-1">
																		{{Str::limit($ticketss->file_name, 10, $end='.......')}}
																	</span>
																</div>
																@endforeach

															</div>
														</div>
													</div>
												</div>
									{{-- Reply Ticket Display --}}
									@if ($ticket->status == 'Closed')
										@if (setting('USER_REOPEN_ISSUE') == 'yes')
											@if (setting('USER_REOPEN_TIME') == '0')

												<div class="card">
													<form method="POST" action="{{url('customer/closed/' .$ticket->ticket_id)}}">
														@csrf
														@honeypot

														<input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
														<div class="card-body">
															<p>{{trans('langconvert.userdashboard.ticketclosedreopen')}}
																<input type="submit" class="btn btn-secondary" value="{{trans('langconvert.admindashboard.reopen')}}"
																	onclick="this.disabled=true;this.form.submit();">
															</p>
														</div>
													</form>
												</div>
											@else
												@if($ticket->closing_ticket != null)
												@if (now()->format('Y-m-d') <= $ticket->closing_ticket->adddays(setting('USER_REOPEN_TIME'))->format('Y-m-d'))

												<div class="card">
													<form method="POST" action="{{url('customer/closed/' .$ticket->ticket_id)}}">
														@csrf
														@honeypot
														
														<input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
														<div class="card-body">
															<p>{{trans('langconvert.userdashboard.ticketclosedreopen')}}
																<input type="submit" class="btn btn-secondary" value="{{trans('langconvert.admindashboard.reopen')}}"
																	onclick="this.disabled=true;this.form.submit();">
															</p>
														</div>
													</form>
												</div>
												@endif
												@endif
											@endif
										@endif
									@elseif ($ticket->status == 'On-Hold')
								
												<div class="alert alert-light-warning note" role="alert">
													<p class="m-0"><b>{{trans('langconvert.admindashboard.note')}}:-</b> {{$ticket->note}}</p>
												</div>
									@else

												<div class="card">
													<div class="card-header border-0">
														<h4 class="card-title">{{trans('langconvert.admindashboard.replyticket')}}</h4>
													</div>
													<form method="POST" action="{{route('client.comment', $ticket->ticket_id)}}"
														enctype="multipart/form-data">
														@csrf
														@honeypot

														<input type="hidden" name="ticket_id" value="{{ $ticket->id }}">
														<div class="card-body">
															<textarea class="summernote form-control  @error('comment') is-invalid @enderror"
																name="comment" rows="6" cols="100" aria-multiline="true"></textarea>
																
															@error('comment')

															<span class="invalid-feedback" role="alert">
																<strong>{{ $message }}</strong>
															</span>
															@enderror

															@if(setting('USER_FILE_UPLOAD_ENABLE') == 'yes')

															<div class="form-group mt-3">
																<label class="form-label">{{trans('langconvert.admindashboard.uploadimage')}}</label>
																<div class="file-browser">
																	<div class="needsclick dropzone" id="document-dropzone"></div>
																</div>
																<small class="text-muted"><i>{{trans('langconvert.admindashboard.filesizenotbe')}}
																	{{setting('FILE_UPLOAD_MAX')}}{{trans('langconvert.admindashboard.mb')}}</i></small>
															</div>
															@endif

															<div class="custom-controls-stacked d-md-flex mt-3">
																<label class="form-label mt-1 me-5">{{trans('langconvert.admindashboard.status')}}</label>
																<label class="custom-control form-radio success me-4">
																	@if($ticket->status == 'Re-Open')
																	
																	<input type="radio" class="custom-control-input" name="status"
																		value="Inprogress" {{ $ticket->status == 'Re-Open' ? 'checked' : '' }}>
																	<span class="custom-control-label">{{trans('langconvert.newwordslang.inprogress')}}</span>
																	@elseif($ticket->status == 'Inprogress')

																	<input type="radio" class="custom-control-input" name="status"
																		value="{{$ticket->status}}" {{ $ticket->status == 'Inprogress' ? 'checked' :
																	'' }}>
																	<span class="custom-control-label">{{trans('langconvert.newwordslang.leaveascurrent')}}</span>
																	@else

																	<input type="radio" class="custom-control-input" name="status"
																		value="{{$ticket->status}}" {{ $ticket->status == 'New' ? 'checked' : '' }}>
																	<span class="custom-control-label">{{trans('langconvert.newwordslang.new')}}</span>
																	@endif

																</label>
																<label class="custom-control form-radio success">
																	<input type="radio" class="custom-control-input" name="status" value="Closed">
																	<span class="custom-control-label">{{trans('langconvert.newwordslang.solved')}}</span>
																</label>
															</div>
														</div>
														<div class="card-footer">
															<div class="form-group float-end">
																<input type="submit" class="btn btn-secondary" value="{{trans('langconvert.admindashboard.reply')}}"
																onclick="this.disabled=true;this.form.submit();">
															</div>
														</div>
													</form>
												</div>
											
									@endif

												<!---- End Reply Ticket Display ---->

												@if($comments->isNotEmpty())

												<!---- Comments Display ---->

												<div class="card support-converbody">
													<div class="card-header border-0">
														<h4 class="card-title">{{trans('langconvert.admindashboard.conversions')}}</h4>
													</div>
													<div id="spruko_loaddata">

														@include('user.ticket.showticketdata')

													</div>
												</div>

												<!--- End Comments Display -->
													@endif

											</div>
										</div>
									</div>
								</div>
							</section>
							<!--Ticket Show-->

							@endsection

		@section('scripts')


		<!-- INTERNAL Vertical-scroll js-->
		<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Summernote js  -->
		<script src="{{asset('assets/plugins/summernote/summernote.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL Index js-->
		<script src="{{asset('assets/js/support/support-ticketview.js')}}?v=<?php echo time(); ?>"></script>

		<!-- INTERNAL DropZone js-->
		<script src="{{asset('assets/plugins/dropzone/dropzone.js')}}?v=<?php echo time(); ?>"></script>

		<!-- GALLERY JS -->
		<script src="{{asset('assets/plugins/simplelightbox/simplelightbox.js')}}?v=<?php echo time(); ?>"></script>
		<script src="{{asset('assets/plugins/simplelightbox/light-box.js')}}?v=<?php echo time(); ?>"></script>

		<!--Showmore Js-->
		<script src="{{asset('assets/js/jquery.showmore.js')}}?v=<?php echo time(); ?>"></script>
		<script src="{{asset('assets/plugins/jquerysticky/jquery-sticky/jquery-sticky.js')}}?v=<?php echo time(); ?>"></script>
		<script src="{{asset('assets/plugins/jquerysticky/jquery-sticky.js')}}?v=<?php echo time(); ?>"></script>

		<script type="text/javascript">
            "use strict";
			
			(function($){

				// Delete Media
				$('body').on('click', '.imgdel', function () {
					var product_id = $('.imgdel').data("id");
					swal({
						title: `{{trans('langconvert.admindashboard.wanttocontinue')}}`,
						text: "{{trans('langconvert.admindashboard.eraserecordspermanently')}}",
						icon: "warning",
						buttons: true,
						dangerMode: true,
					})
					.then((willDelete) => {
						if (willDelete) {
							$.ajax({
								type: "DELETE",
								url: SITEURL + "/customer/image/delete/"+product_id,
								success: function (data) {
									//  table.draw();
									$('#imageremove'+ product_id).remove();
								},
								data: {
								"_token": "{{ csrf_token() }}",

								},
								error: function (data) {
									console.log('Error:', data);
								}
							});
						}
					});			
				});
			})(jQuery);


			@if(setting('USER_FILE_UPLOAD_ENABLE') == 'yes')

			// Image Upload
			var uploadedDocumentMap = {}
			Dropzone.options.documentDropzone = {
				url: '{{route('client.ticket.image' ,$ticket->ticket_id)}}',
				maxFilesize: '{{setting('FILE_UPLOAD_MAX')}}', // MB
				addRemoveLinks: true,
				acceptedFiles: '{{setting('FILE_UPLOAD_TYPES')}}',
				maxFiles: '{{setting('MAX_FILE_UPLOAD')}}',
				headers: {
						'X-CSRF-TOKEN': "{{ csrf_token() }}"
				},
				success: function (file, response) {
					$('form').append('<input type="hidden" name="comments[]" value="' + response.name + '">')
					uploadedDocumentMap[file.name] = response.name
				},
				removedfile: function (file) {
					file.previewElement.remove()
					var name = ''
					if (typeof file.file_name !== 'undefined') {
						name = file.file_name
					} else {
						name = uploadedDocumentMap[file.name]
					}
					$('form').find('input[name="comments[]"][value="' + name + '"]').remove()
				},
				init: function () {
					@if(isset($project) && $project->document)
					var files =
					{!! json_encode($project->document) !!}
					for (var i in files) {
						var file = files[i]
						this.options.addedfile.call(this, file)
						file.previewElement.classList.add('dz-complete')
							$('form').append('<input type="hidden" name="comments[]" value="' + file.file_name + '">')
					}
					@endif
					this.on('error', function(file, errorMessage) {
						if (errorMessage.message) {
								var errorDisplay = document.querySelectorAll('[data-dz-errormessage]');
								errorDisplay[errorDisplay.length - 1].innerHTML = errorMessage.message;
						}
					});
				}
			}

			@endif

			// Scrolling Effect
			var page = 1;
			$(window).scroll(function() {
				if($(window).scrollTop() + $(window).height() >= $(document).height()) {
					page++;
					loadMoreData(page);
				}
			});

			function loadMoreData(page){
				$.ajax(
				{
					url: '?page=' + page,
					type: "get",
					
				})
				.done(function(data)
				{
					$("#spruko_loaddata").append(data.html);
				})
				.fail(function(jqXHR, ajaxOptions, thrownError)
				{
					alert('server not responding...');
				});
			}

			// Edit Form
			function showEditForm(id) {
				var x = document.querySelector(`#supportnote-icon-${id}`);

				if (x.style.display == "block") {
					x.style.display = "none";
				}
				else {

					x.style.display = "block";
				}
			}

			// Readmore
			let readMore = document.querySelectorAll('.readmores')
			readMore.forEach(( element, index)=>{
				if(element.clientHeight <= 200)    {
					element.children[0].classList.add('end')
				}
				else{
					element.children[0].classList.add('readMore')
				}
			})

			$(`.readMore`).showmore({
				closedHeight: 60,
				buttonTextMore: 'Read More',
				buttonTextLess: 'Read Less',
				buttonCssClass: 'showmore-button',
				animationSpeed: 0.5
			});

		</script>

		@endsection