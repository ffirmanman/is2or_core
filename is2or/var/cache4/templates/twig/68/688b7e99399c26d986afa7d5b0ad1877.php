<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__266b7528bdd73643e516fe8d3c2ab2c7 */
class __TwigTemplate_725460a21817f0f1bd1f1de22974d730 extends \Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
  <title>";
        // line 7
        echo ($context["company_name"] ?? null);
        echo ": Message title</title>
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
        if (twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 44)) {
            echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 44);
        } else {
            echo "#999";
        }
        // line 45
        echo "    }

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
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 77);
        echo ";
      font-size: ";
        // line 78
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "body_font_size", [], "any", false, false, false, 78);
        echo ";
      font-family: ";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "body_font", [], "any", false, false, false, 79);
        echo ",Helvetica,Arial,sans-serif;
    }

    .message-footer {
      border-top: 1px solid ";
        // line 83
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 83);
        echo "
    }

    .message-body table th,
    .message-footer table th {
      text-transform: uppercase;
      border-bottom: 1px solid ";
        // line 89
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 89);
        echo ";
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
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 138);
        echo ";
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
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "font", [], "any", false, false, false, 151);
        echo ";
    }

    h1 a,h2 a,h3 a,h4 a,h5 a,h6 a {
      color: ";
        // line 155
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 155);
        echo ";
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
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 182);
        echo ";
      background-color: ";
        // line 183
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "general_bg_color", [], "any", false, false, false, 183);
        echo ";
    }

    .copyright td {
      padding: 10px 0 0 0;
      padding-bottom: 0 !important;
    }

    a {
      color: ";
        // line 192
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "links", [], "any", false, false, false, 192);
        echo ";
    }

    ";
        // line 195
        if ((($context["language_direction"] ?? null) == "rtl")) {
            // line 196
            echo "
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
        echo "
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
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 271);
        echo "\" style=\"background-color: ";
        echo twig_get_attribute($this->env, $this->source, ($context["styles"] ?? null), "base", [], "any", false, false, false, 271);
        echo "\" dir=\"";
        echo ($context["language_direction"] ?? null);
        echo "\">
    <tr>
      <td style=\"padding: 40px 10px 40px 10px;\">
        <table class=\"content-wrapper\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"600\">
          <tr class=\"message-header\" style=\"background-color:#161e2d;\">
            <td>
              <table  cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                <tr>
                  <td class=\"bg\"><a href=\"";
        // line 279
        echo twig_get_attribute($this->env, $this->source, ($context["storefront_data"] ?? null), "url", [], "any", false, false, false, 279);
        echo "\"><img src=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_path", [], "any", false, false, false, 279);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 279);
        echo "\" width=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_x", [], "any", false, false, false, 279);
        echo "\" height=\"";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), "mail", [], "any", false, false, false, 279), "image", [], "any", false, false, false, 279), "image_y", [], "any", false, false, false, 279);
        echo "\" style=\"width: 150px; max-width: 200px; max-height: 80px;\" /></a></td>
                </tr>
              </table>
            </td> 
          </tr>
          ";
        // line 284
        if (($context["title"] ?? null)) {
            // line 285
            echo "          <tr class=\"message-header__title\">
            <td>
              <h1>";
            // line 287
            echo ($context["title"] ?? null);
            echo "</h1>
            </td>
          </tr>
          ";
        }
        // line 291
        echo "
          <tr class=\"message-body\">

<td>";
    }

    public function getTemplateName()
    {
        return "__string_template__266b7528bdd73643e516fe8d3c2ab2c7";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 291,  394 => 287,  390 => 285,  388 => 284,  372 => 279,  357 => 271,  300 => 216,  278 => 196,  276 => 195,  270 => 192,  258 => 183,  254 => 182,  224 => 155,  217 => 151,  201 => 138,  149 => 89,  140 => 83,  133 => 79,  129 => 78,  125 => 77,  91 => 45,  85 => 44,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__266b7528bdd73643e516fe8d3c2ab2c7", "");
    }
}
