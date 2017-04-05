    @extends('index')

    @section('content')

    <div class="container">
        </br>

        <div class="row">
            <div class="media service-box wow fadeInRight">
                <div class="panel-heading">Insription</div>
                <div class="panel-body">

                    <form id="form_inscription" name="form_inscription" class=" form-horizontal" role="form" method="POST"  action="{{ url('/register') }}" onSubmit="return validate(this);">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                            <label for="name" class="col-md-4 control-label">*Nom</label>
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required >

                                </div>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('prenom') ? ' has-error' : '' }} has-feedback">

                            <label class="col-md-4 control-label">*Prénom</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input type="text" name="prenom" id="prenom" class="form-control" maxlength="30" value="{{ old('prenom') }}" required>


                                </div>
                                @if ($errors->has('prenom'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('civilite') ? ' has-error' : '' }} has-feedback">

                            <label class="col-md-4 control-label">*Civilité</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">

                                    <div style="float:left;margin-right:20%">
                                        <label><input type="radio" name="civilite" id="civilite" class="form-control" style="height:20px;" value="1" data-bv-field="Type_Client" value="{{ old('civilite') }}" required>Entreprise
                                        </label>


                                    </div>

                                    @if ($errors->has('civilite'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('civilite') }}</strong>
                                    </span>
                                    @endif
                                    <div style="float:left">
                                        <label><input type="radio" name="Type_Client" id="Type_Client" class="form-control" style="height:20px;" disabled="disabled" value="0" data-bv-field="Type_Client"  value="{{ old('civilite') }}"><i class="form-control-feedback" data-bv-icon-for="Type_Client" style="display: none;"></i>Particulier</label>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('adresse') ? ' has-error' : '' }} has-feedback"> 
                            <label class="col-md-4 control-label">*Adresse</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                    <input type="text" name="adresse" id="adresse" class="form-control" maxlength="120" autocomplete="off" data-bv-field="Adresse" value="{{ old('adresse') }}" required><i class="form-control-feedback" data-bv-icon-for="Adresse" style="display: none;"></i>
                                </div>

                                 @if ($errors->has('adresse'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                 @endif

                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('ville') ? ' has-error' : '' }} has-feedback"> 
                            <label class="col-md-4 control-label">*Ville</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                    <input type="text" name="ville" id="ville" class="form-control" maxlength="50" autocomplete="off" data-bv-field="Ville" value="{{ old('ville') }}" required ><i class="form-control-feedback" data-bv-icon-for="Ville" style="display: none;"></i>
                                </div>

                                @if ($errors->has('ville'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                 @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('wilaya') ? ' has-error' : '' }} has-feedback"> 
                            <label class="col-md-4 control-label">*Téléphone FixeWilaya</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                    <select name="wilaya" id="wilaya" class="form-control selectpicker" data-bv-field="wilaya"><option value="{{ old('wilaya') }}">Sélectionner une Wilaya</option><option value="1">Adrar</option><option value="2">Chlef</option><option value="3">Laghouat</option><option value="4">Oum El-Bouaghi</option><option value="5">Batna</option><option value="6">Bejaia</option><option value="7">Biskra</option><option value="8">Bechar</option><option value="9">Blida</option><option value="10">Bouira</option><option value="11">Tamanrassat</option><option value="12">Tebessa</option><option value="13">Tlemcen</option><option value="14">Tiaret</option><option value="15">Tizi-Ouzou</option><option value="16">Alger</option><option value="17">Djelfa</option><option value="18">Jijel</option><option value="19">Setif</option><option value="20">Saida</option><option value="21">Skikda</option><option value="22">Sidi-Bel-Abbes</option><option value="23">Annaba</option><option value="24">Guelma</option><option value="25">Constantine</option><option value="26">Médea</option><option value="27">Mostaganem</option><option value="28">M'sila</option><option value="29">Mascara</option><option value="30">Ouargla</option><option value="31">Oran</option><option value="32">El-Bayadh</option><option value="33">Illizi</option><option value="34">Bordj Bou-Arreridj</option><option value="35">Boumerdes</option><option value="36">El-Taref</option><option value="37">Tindouf</option><option value="38">Tissimsilt</option><option value="39">El-Oued</option><option value="40">khenchela</option><option value="41">Souk Ahras</option><option value="42">Tipaza</option><option value="43">Mila</option><option value="44">Ain Defla</option><option value="45">Naama</option><option value="46">Ain Timouchent</option><option value="47">Ghardaia</option><option value="48">Relizane</option></select><i class="form-control-feedback" data-bv-icon-for="Wilaya" style="display: none;"></i></div><small data-bv-validator="notEmpty" data-bv-validator-for="Wilaya" class="help-block" style="display: none;">Veuillez choisir votre Wilaya</small>

                                    @if ($errors->has('wilaya'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wilaya') }}</strong>
                                    </span>
                                 @endif      

                            </div>
                        </div>


                       
                        
                        
                        <div class="form-group {{ $errors->has('tel_mobile') ? ' has-error' : '' }} has-feedback">
                            <label class="col-md-4 control-label">*Téléphone mobilie</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input type="number" name="tel_mobile" id="tel_mobile" class="form-control" maxlength="9" autocomplete="off" data-bv-field="Fixe" value="{{ old('tel_fix') }}" required><i class="form-control-feedback" data-bv-icon-for="Fixe" style="display: none;"></i>


                                </div>
                                  @if ($errors->has('tel_mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel_mobile') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>


                        <div class="form-group {{ $errors->has('tel_fix') ? ' has-error' : '' }} has-feedback">
                            <label class="col-md-4 control-label">*Téléphone Fixe</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input type="number" name="tel_fix" id="tel_fix" class="form-control" maxlength="9" autocomplete="off" data-bv-field="Fixe" value="{{ old('tel_fix') }}" required><i class="form-control-feedback" data-bv-icon-for="Fixe" style="display: none;"></i>


                                </div>
                                  @if ($errors->has('tel_fix'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tel_fix') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon fa fa-at"></i>
                                    </span>
                                    <input id="email" type="email" class="form-control" required name="email" value="{{ old('email') }}">


                                </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                       
                        
                        <!-- 
                       
                       <div class="form-group has-feedback">

                            <label class="col-md-4 control-label">* Confirmer votre E-Mail</label>  

                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon fa fa-at"></i>
                                    </span>
                                    <input type="email" name="Email2" id="Email2" class="form-control" maxlength="50" autocomplete="off" data-bv-field="Email2" required><i class="form-control-feedback" data-bv-icon-for="Email2" style="display: none;"></i>
                                </div>

                               
                            </div>
                        </div>

                        <script>
                            document.getElementById("Email2").onpaste = function () {
                                alert("Merci de ne pas copier/coller");        // on prévient
                                return false;        // on empêche
                            }
                        </script> 
                       
                       !-->


                        <div class="form-group {{ $errors->has('compte_banquaire') ? ' has-error' : '' }}  has-feedback">
                            <label class="col-md-4 control-label">*Code Postale</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-eur"></i></span>

                                    <input type="text" name="compte_banquaire" id="compte_banquaire" class="form-control" maxlength="5" data-bv-field="Code_Postal" value="{{ old('compte_banquaire') }}" required><i class="form-control-feedback" data-bv-icon-for="Code_Postal" style="display: none;"></i>



                                </div>
                                @if ($errors->has('compte_banquaire'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('compte_banquaire') }}</strong>
                                    </span>
                                    @endif
                              </div>
                        </div>

                        <div class="form-group {{ $errors->has('organisation') ? ' has-error' : '' }}  has-feedback">
                            <label class="col-md-4 control-label">*Organisation</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-registration-mark"></i></span>
                                    <input type="text" name="organisation" id="organisation" class="form-control" maxlength="20" data-bv-field="Organisation" value="{{ old('organisation') }}" required>


                                </div>
                                @if ($errors->has('organisation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('organisation') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                            <label for="password" class="col-md-4 control-label"> *Mot de pass</label>

                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon  glyphicon-lock"></i></span>
                                    <input id="password" type="password" class="form-control" name="password" required>


                                </div>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                            <label for="password-confirm" class="col-md-4 control-label">*Confirmer mot de pass</label>

                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon  glyphicon-lock"></i></span>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>



                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Creer compte
                                </button>
                            </div>
                        </div>
                </form>


                </div>



            </div>

        </div>
    </div>


    @endsection
