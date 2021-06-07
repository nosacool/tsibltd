<div class="modal fade text-dark" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Get A Quote</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
            <form name="quoteForm" id="contact_form" class="form-border" method="post" action="/submit-quote">
                @csrf
            <div class="row">
                <div class="field-set col-lg-6">
                <select name="insurance_type" class="form-control" title="Select Insurance">
                    <option selected value="none">Select Insurance</option>

                    @foreach ($insurances as $insurance)
                    <option value="{{$insurance->name}}">{{$insurance->name}}</option>
                    @endforeach

                </select>
                </div>

                <div class="field-set col-lg-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" />
                </div>
            </div>
            <div class="row">
                <div class="field-set col-lg-6">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" />
                </div>

                <div class="field-set col-lg-6">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Your Phone" />
                </div>
            </div>
            <div class="spacer-half"></div>
                <div class="field-set col-lg-12">
                    <textarea name="additional_info" id="message" class="form-control" placeholder="Additional Details"></textarea>
                </div>



                <div id="submit">

                </div>
                @isset($message)
                <div class="success">{{$message}}.</div>
                @endisset



                <div id="mail_fail" class="error">Sorry, error occured this time sending your message.</div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" value="Submit Form" class="btn btn-custom" />
        </form>
        </div>
      </div>
    </div>
  </div>
