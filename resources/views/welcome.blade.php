@extends('layouts.app')

@section('content')
<div class="main-container">
    <section class="fullscreen image-bg">
        <div class="background-image-holder">
            <img alt="image" class="background-image" src="{{asset('storage/img/vent1.jpg')}}" />
        </div>
        <div class="container v-align-transform">
            <div class="row">
                <div class="col-sm-8 col-md-6 mb24">
                    <h6 class="uppercase">@lang('welcome.video intro')</h6>
                    <img alt="Pic" src="{{asset('storage/img/vent1.png')}}" />
                </div>
                <div class="col-sm-12">
                    <div class="modal-container pull-left">
                        <div class="play-button btn-modal inline"></div>
                        <div class="foundry_modal no-bg">
                            <iframe data-provider="youtube" data-video-id="m_5g_D_iP2s" data-autoplay="1"
                                allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                    <!--end of modal video-->
                    <p class="lead inline-block p32 p0-xs pt8">
                        Take a vacation on the wild side with Foundry
                        <br /> Adventure Tours and never look at life the same.
                    </p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <h3 class="uppercase mb40 mb-xs-24">@lang('welcome.Smash Your Comfort Zone')</h3>
                    <p class="lead mb64">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut fugit, sed quia consequuntur magni dolores.
                    </p>
                    <img alt="Pic" class="image-small" src="{{asset('storage/img/signature.png')}}" />
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="bg-secondary">
        <div class="container">
            <div class="row v-align-children">
                <div class="col-md-5 col-sm-6 text-center mb-xs-24">
                    <a href="#">
                        <h2 class="uppercase  mb16">#foundrylife</h2>
                    </a>
                    <h6 class="uppercase">Follow Us For Updates</h6>
                    <p class="lead mb0">
                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                        consequuntur magni dolores.
                    </p>
                </div>
                <div class="col-md-7 col-sm-6 text-center">
                    <div class="instafeed grid-gallery" data-user-name="mrareweb">
                        <ul></ul>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="pt40 pb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h6 class="uppercase mb0">Popular Foundry Tours</h6>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-bg bg-dark parallax overlay pt160 pb160 pt-xs-40 pb-xs-40">
        <div class="background-image-holder">
            <img alt="Background Image" class="background-image" src="{{asset('storage/img/vent3.jpg')}}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb8">Trek Nepal</h2>
                    <p class="lead mb40">A brief description of the tour.</p>
                    <a class="btn btn-lg btn-white mb0" href="#">Explore Tour</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-bg bg-dark parallax overlay pt160 pb160 pt-xs-40 pb-xs-40">
        <div class="background-image-holder">
            <img alt="Background Image" class="background-image" src="{{asset('storage/img/vent4.jpg')}}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb8">Explore Antelope Canyon</h2>
                    <p class="lead mb40">A brief description of the tour.</p>
                    <a class="btn btn-lg btn-white mb0" href="#">Explore Tour</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-bg bg-dark parallax overlay pt160 pb160 pt-xs-40 pb-xs-40">
        <div class="background-image-holder">
            <img alt="Background Image" class="background-image" src="{{asset('storage/img/vent5.jpg')}}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="uppercase mb8">Scale Sierra Nevada</h2>
                    <p class="lead mb40">A brief description of the tour.</p>
                    <a class="btn btn-lg btn-white mb0" href="#">Explore Tour</a>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section class="image-square left">
        <div class="col-md-6 image">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/vent2.jpg')}}" />
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 content">
            <h3 class="uppercase">Book Your Next
                <br /> Adventure Today.</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                <br /> do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
            <ul class="bullets mb40 mb-xs-24">
                <li>All Inclusive Packages</li>
                <li>Multi-Night Stays</li>
                <li>Equipment Provided</li>
            </ul>
            <a class="btn btn-lg bg-dark mb0" href="#">Book A Tour</a>
        </div>
    </section>
    <section class="bg-primary">
        <div class="container">
            <div class="row mb48 mb-xs-24">
                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 text-center">
                    <img alt="Pic" class="mb16" src="{{asset('storage/img/vent2.png')}}" />
                    <h5 class="uppercase">Exclusive Offers, Travel Tips &amp; More</h5>
                </div>
            </div>
            <!--end of row-->
            <div class="row mb40 mb-xs-24">
                <div class="col-sm-6 col-sm-offset-3">
                    <form class="form-newsletter halves"
                        data-success="Thanks for your registration, we will be in touch shortly."
                        data-error="Please fill all fields correctly.">
                        <input type="text" name="email"
                            class="mb0 transparent validate-email validate-required signup-email-field"
                            placeholder="Email Address" />
                        <button type="submit" class="btn-white mb0">Keep Me Informed</button>
                        <iframe
                            srcdoc="<!-- Begin MailChimp Signup Form --><link href=&quot;https://cdn-images.mailchimp.com/embedcode/classic-081711.css&quot; rel=&quot;stylesheet&quot; type=&quot;text/css&quot;><style type=&quot;text/css&quot;>	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */</style><div id=&quot;mc_embed_signup&quot;><form action=&quot;//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=94d040322a&quot; method=&quot;post&quot; id=&quot;mc-embedded-subscribe-form&quot; name=&quot;mc-embedded-subscribe-form&quot; class=&quot;validate&quot; target=&quot;_blank&quot; novalidate>    <div id=&quot;mc_embed_signup_scroll&quot;>	<h2>Subscribe to our mailing list</h2><div class=&quot;indicates-required&quot;><span class=&quot;asterisk&quot;>*</span> indicates required</div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-EMAIL&quot;>Email Address  <span class=&quot;asterisk&quot;>*</span></label>	<input type=&quot;email&quot; value=&quot;&quot; name=&quot;EMAIL&quot; class=&quot;required email&quot; id=&quot;mce-EMAIL&quot;></div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-FNAME&quot;>First Name </label>	<input type=&quot;text&quot; value=&quot;&quot; name=&quot;FNAME&quot; class=&quot;&quot; id=&quot;mce-FNAME&quot;></div><div class=&quot;mc-field-group&quot;>	<label for=&quot;mce-LNAME&quot;>Last Name </label>	<input type=&quot;text&quot; value=&quot;&quot; name=&quot;LNAME&quot; class=&quot;&quot; id=&quot;mce-LNAME&quot;></div>	<div id=&quot;mce-responses&quot; class=&quot;clear&quot;>		<div class=&quot;response&quot; id=&quot;mce-error-response&quot; style=&quot;display:none&quot;></div>		<div class=&quot;response&quot; id=&quot;mce-success-response&quot; style=&quot;display:none&quot;></div>	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->    <div style=&quot;position: absolute; left: -5000px;&quot;><input type=&quot;text&quot; name=&quot;b_77142ece814d3cff52058a51f_94d040322a&quot; tabindex=&quot;-1&quot; value=&quot;&quot;></div>    <div class=&quot;clear&quot;><input type=&quot;submit&quot; value=&quot;Subscribe&quot; name=&quot;subscribe&quot; id=&quot;mc-embedded-subscribe&quot; class=&quot;button&quot;></div>    </div></form></div><script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script><!--End mc_embed_signup-->"
                            class="mail-list-form">
                        </iframe>
                    </form>
                </div>
            </div>
            <!--end of row-->
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="fade-half lead mb0">*Newsletters are sent bi-monthly</p>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>

</div>
@endsection
