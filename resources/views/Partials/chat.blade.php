<!--Begin:: Chat-->
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="kt-chat">
				<div class="kt-portlet kt-portlet--last">
					<div class="kt-portlet__head">
						<div class="kt-chat__head ">
							<div class="kt-chat__left">
								<div class="kt-chat__label">
									<a href="#" class="kt-chat__title"></a>
									<span class="kt-chat__status">
										{{-- <span class="kt-badge kt-badge--dot kt-badge--success"></span> Active --}}
									</span>
								</div>
							</div>
							<div class="kt-chat__right">
								<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
									<i class="flaticon2-cross"></i>
								</button>
							</div>
						</div>
					</div>
					<div class="kt-portlet__body">
						<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="225">
							<div class="kt-chat__messages kt-chat__messages--solid">
								<div class="kt-chat__message kt-chat__message--success">
									<div class="kt-chat__user">
										<span class="kt-media kt-media--circle kt-media--sm">
											<img src="assets/media/users/100_12.jpg" alt="image">
										</span>
										<a href="#" class="kt-chat__username">Jason Muller</span></a>
										<span class="kt-chat__datetime">2 Hours</span>
									</div>
									<div class="kt-chat__text">
										How likely are you to recommend our company<br> to your friends and family?
									</div>
								</div>
								<div class="kt-chat__message kt-chat__message--right kt-chat__message--brand">
									<div class="kt-chat__user">
										<span class="kt-chat__datetime">30 Seconds</span>
										<a href="#" class="kt-chat__username">You</span></a>
										<span class="kt-media kt-media--circle kt-media--sm">
											<img src="assets/media/users/300_21.jpg" alt="image">
										</span>
									</div>
									<div class="kt-chat__text">
										Hey there, we’re just writing to let you know that you’ve<br> been subscribed to a repository on GitHub.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-portlet__foot">
						<div class="kt-chat__input">
							<div class="kt-chat__editor">
								<textarea id="message" placeholder="Type here..." style="height: 50px"></textarea>
                            	<input type="file" name="attachment" id="attachment" accept=".pdf,.png,.jpg,.jpeg">
							</div>
							<div class="kt-chat__toolbar">
								<div class="kt_chat__tools">
									<a href="#"><i class="flaticon2-photograph"></i></a>
									<a href="#"><i class="flaticon-interface"></i></a>
								</div>
								<div class="kt_chat__actions">
									<button type="button" class="btn btn-brand btn-md  btn-font-sm btn-upper btn-bold kt-chat__reply">reply</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--ENd:: Chat-->