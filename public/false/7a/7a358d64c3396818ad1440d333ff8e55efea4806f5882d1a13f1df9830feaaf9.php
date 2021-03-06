<?php

/* home.twig */
class __TwigTemplate_4fb6ced539ce3f5f128fb591e7264f952c4c01a048b674052cc1c87dc9ac9c09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css\" integrity=\"sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"../public/css/custom.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>
<body>

<div class=\"login-area\">
    <div class=\"bg-image\">
        <div class=\"login-signup\">
            <div class=\"container\">
                <div class=\"login-header\">
                    <div class=\"row\">
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"login-logo\">

                            </div>
                        </div>
                        <div class=\"col-md-6 col-sm-6 col-xs-12\">
                            <div class=\"login-details\">
                                <ul class=\"nav nav-tabs navbar-right\">
                                    <li><a data-toggle=\"tab\" href=\"#register\">Register</a></li>
                                    <li class=\"active\"><a data-toggle=\"tab\" href=\"#login\">Login</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                <div class=\"tab-content\">
                    <div id=\"register\" class=\"tab-pane\">
                        <div class=\"login-inner\">
                            <div class=\"title\">
                                <h1>Please fill in the following fields</span></h1>
                            </div>
                            <div class=\"login-form\">
                                <form action=\"/authentication/public/auth/create\" method=\"post\">
                                    <div class=\"form-details\">
                                        <label class=\"user\">
                                            <input type=\"text\" name=\"name\" placeholder=\"Full Name\" id=\"username\">
                                        </label>
                                        <label class=\"mail\">
                                            <input type=\"email\" name=\"email\" placeholder=\"Email Address\" id=\"mail\">
                                        </label>
                                        <label class=\"pass\">
                                            <input type=\"password\" name=\"passsword\" placeholder=\"Password\" id=\"password\">
                                        </label>
                                        <label class=\"pass\">
                                            <input type=\"password\" name=\"passswordconf\" placeholder=\"Confirm Password\" id=\"password\">
                                        </label>
                                    </div>
                                    <button type=\"submit\" class=\"form-btn\" onsubmit=\"\">Sent</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id=\"login\" class=\"tab-pane fade in active\">
                        <div class=\"login-inner\">
                            <div class=\"title\">
                                <h1>Welcome <span>back!</span></h1>
                            </div>
                            <div class=\"login-form\">
                                <form>
                                    <div class=\"form-details\">
                                        <label class=\"user\">
                                            <input type=\"text\" name=\"email\" placeholder=\"Email\" id=\"username\">
                                        </label>
                                        <label class=\"pass\">
                                            <input type=\"password\" name=\"passsword\" placeholder=\"Password\" id=\"password\">
                                        </label>
                                    </div>
                                    <button type=\"submit\" class=\"form-btn\" onsubmit=\"\">Sent</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "home.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "home.twig", "C:\\xampp\\htdocs\\dmytro_test\\resource\\views\\home.twig");
    }
}
