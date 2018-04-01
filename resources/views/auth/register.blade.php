@extends('shared.layout')

@section('content')
            <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-loginsignup">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                <div class="tg-logingarea">
                                    <h2 class="roboto">რეგისტრაცია</h2>
                                    <form class="tg-formtheme tg-formloging" method="post" action="/auth/register">
                                        {!! csrf_field() !!}
                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <h4 class="roboto">{{ $errors->first() }}</h4>
                                        </div>
                                        @endif
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="firstname" class="form-control roboto"  placeholder="სახელი">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control roboto"  placeholder="გვარი">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="text" name="email" class="form-control roboto" placeholder="ელ.ფოსტა">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control roboto"  placeholder="მობილური">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="address" class="form-control roboto"  placeholder="მისამართი">
                                            </div>
                                            
                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control roboto" placeholder="პაროლი">
                                            </div>
                                            <button class="tg-btn roboto form-control" type="submit">რეგისტრაცია</button>
                                            <div class="text-center" style="margin-top:20px;">
                                                <a href="/auth/login" class="roboto">ავტორიზაცია</a>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->
@endsection
