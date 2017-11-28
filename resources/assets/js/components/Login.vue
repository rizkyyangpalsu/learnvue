<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">



                            <div class="form-group" :class="{'has-error': errorsEmail}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" v-model="logindetails.email" required autofocus>
                                    <span class="help-block" v-if="errorsEmail">
                                        <strong>{{ emailError }}</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group" :class="{'has-error': errorsPassword}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" v-model="loginDetails.password" required>


                                    <span class="help-block" v-if="errorsPassword">
                                        <strong>{{ passwordError }}</strong>
                                    </span>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" v-model="loginDetails.remember" > Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" @click.preverent="loginPost">
                                        Login
                                    </button>

                                    <route-link class="btn btn-link" :to="{ name: ForgotPassword }">
                                        Forgot Your Password?
                                    </route-link>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>