<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__421e93544d4b86d06f572de72beb06dc */
class __TwigTemplate_b94405e0cad6652d902198bc28fd36df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>";
        // line 7
        yield ($context["company_name"] ?? null);
        yield ": Message title</title>
  <style type=\"text/css\">
    #outlook a {
      padding: 0;
    }

    body {
      width: 100% !important;
      -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
      margin: 0;
      padding: 0;
    }

    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      outline: none;
    }

    a img {
      border: none;
    }

    .image_fix {
      display: block;
    }

    .message-header > td {
      padding: 10px 30px 20px 30px;
    }

    .message-header__title {
      background-color: ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 44)) {
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 44);
        } else {
            yield "#999";
        }
        // line 45
        yield "    }

    .message-header__title > td {
      padding: 20px 30px;
    }

    .message-header__title h1 {
      font-size: 20px;
      text-transform: uppercase;
      font-weight: normal;
      color: #Fff;
    }

    .message-title > td,
    .message-body > td {
      padding: 30px;
    }

    .message-footer > td {
      padding: 20px 30px;
      background-color: #232f3e;
    }

    .message-copyright > td {
      padding: 0px 30px 10px;
    }

    .message-header td,
    .message-title td,
    .message-body th, .message-body td,
    .message-footer th, .message-footer td,
    .message-copyright th, .message-copyright td {
      color: ";
        // line 77
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 77);
        yield ";
      font-size: ";
        // line 78
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "body_font_size", [], "any", false, false, false, 78);
        yield ";
      font-family: ";
        // line 79
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "body_font", [], "any", false, false, false, 79);
        yield ",Helvetica,Arial,sans-serif;
    }

    .message-footer {
      border-top: 1px solid ";
        // line 83
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 83);
        yield "
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid ";
        // line 89
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 89);
        yield ";
      text-align: left;
    }

    .message-body table td,
    .message-footer table td {
      padding: 5px;
    }

    .message-footer table th{
        border: none;
    }

    .message-footer td {
      color: #fff;
    }

    .footer-contact__title {
      margin: 0px;
      font-size: 14px !important;
      font-weight: normal;
      color: #fff !important;
    }

    .footer-social__title {
      margin: 0px;
      text-transform: uppercase;
      font-size: 16px !important;
      font-weight: bold;
      color: #fff !important;
    }

    .message-footer table td.footer-social td {
      padding: 0px;
      padding-right: 10px;
    }

    .email-preview{
      display:none;
      font-size:1px;
      color:#333333;
      line-height:1px;
      max-height:0px;
      max-width:0px;
      opacity:0;
      overflow:hidden;
    }

    .with-subline {
      color: ";
        // line 138
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 138);
        yield ";
      text-transform: uppercase;
      font-weight: bold;
      font-size: 1em;
      padding-bottom: 10px;
      border-bottom: 1px solid #D4D4D4;
    }

    p {
      margin: 1em 0;
    }

    h1,h2,h3,h4,h5,h6 {
      color: ";
        // line 151
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 151);
        yield ";
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: ";
        // line 155
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 155);
        yield ";
    }

    h1 a:active,h2 a:active,h3 a:active,h4 a:active,h5 a:active,h6 a:active {
      color: red;
    }

    h1 a:visited,h2 a:visited,h3 a:visited,h4 a:visited,h5 a:visited,h6 a:visited {
      color: purple;
    }

    table td,
    table th {
      border-collapse: collapse;
    }

    table {
      border-collapse: collapse;
      mso-table-lspace: 0pt;
      mso-table-rspace: 0pt;
    }

    address {
      margin: 0px;
    }

    .content-wrapper {
      border: 1px solid ";
        // line 182
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 182);
        yield ";
      background-color: ";
        // line 183
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "general_bg_color", [], "any", false, false, false, 183);
        yield ";
    }

    .copyright td {
      padding: 10px 0 0 0;
      padding-bottom: 0 !important;
    }

    a {
      color: ";
        // line 192
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 192);
        yield ";
    }

    ";
        // line 195
        if ((($context["language_direction"] ?? null) == "rtl")) {
            // line 196
            yield "
    .ty-email-footer {
      text-align: center !important;
    }

    .ty-email-footer-social-buttons {
      text-align: center !important;
    }

    .ty-email-footer-right-part {
      text-align: center !important;
      float: left !important;
    }

    .ty-email-footer-left-part {
      text-align: center !important;
      float: right  !important;
    }

    ";
        }
        // line 216
        yield "
  </style>
</head>

<body>
    <style>

      @media only screen and (max-device-width: 480px){
        .content-wrapper{width: 100% !important;border: 3px solid #ccc !important; }

        .message-header > td,
        .message-title > td,
        .message-body > td,
        .message-footer > td,
        .message-copyright > td {
          padding: 10px !important;
        }

        .message-header td,
        .message-title td,
        .message-body th, .message-body td,
        .message-footer th, .message-footer td,
        .message-copyright th, .message-copyright td {
          font-size: 16px !important;
        }
      }

      @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {}

      @media only screen and (-webkit-min-device-pixel-ratio: 2) {}

      @media only screen and (-webkit-device-pixel-ratio:.75) {}

      @media only screen and (-webkit-device-pixel-ratio:1) {}

      @media only screen and (-webkit-device-pixel-ratio:1.5) {}
    </style>
  <!-- Targeting Windows Mobile -->
  <!--[if IEMobile 7]>
  <style type=\"text/css\">

.message-header {
background: #161e2d!important;
}



  </style>
  <![endif]-->

  <!--[if gte mso 9]>
    <style>
        /* Target Outlook 2007 and 2010 */
    </style>
  <![endif]-->
  <table class=\"main-wrapper\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\" bgcolor=\"";
        // line 271
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 271);
        yield "\" style=\"background-color: ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 271);
        yield "\" dir=\"";
        yield ($context["language_direction"] ?? null);
        yield "\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\">
          <tr class=\"message-header\" style=\"background-color:#161e2d;\">
            <td>
              <table  cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td class=\"bg\"><a href=\"";
        // line 279
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["storefront_data"] ?? null), "url", [], "any", false, false, false, 279);
        yield "\"><img src=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_path", [], "any", false, false, false, 279);
        yield "\" alt=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 279);
        yield "\" width=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_x", [], "any", false, false, false, 279);
        yield "\" height=\"";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_y", [], "any", false, false, false, 279);
        yield "\" style=\"width: 150px; max-width: 200px; max-height: 80px;\" /></a>
</td>
                </tr>
              </table>
            </td> 
          </tr>
          ";
        // line 285
        if (($context["title"] ?? null)) {
            // line 286
            yield "          <tr class=\"message-header__title\">
            <td>
              <h1>";
            // line 288
            yield ($context["title"] ?? null);
            yield "</h1>
            </td>
          </tr>
          ";
        }
        // line 292
        yield "
          <tr class=\"message-body\">

<td>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__421e93544d4b86d06f572de72beb06dc";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  403 => 292,  396 => 288,  392 => 286,  390 => 285,  373 => 279,  358 => 271,  301 => 216,  279 => 196,  277 => 195,  271 => 192,  259 => 183,  255 => 182,  225 => 155,  218 => 151,  202 => 138,  150 => 89,  141 => 83,  134 => 79,  130 => 78,  126 => 77,  92 => 45,  86 => 44,  46 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__421e93544d4b86d06f572de72beb06dc", "");
    }
}
