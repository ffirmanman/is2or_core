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

/* __string_template__951b23f20043c62f25d559aa5c6fe2d9 */
class __TwigTemplate_ef38fc225bbfa4ed6d75e42c50d719f6 extends \Twig\Template
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
        echo "<style>
.mail-manu a {
  color: #fff !important;
  text-align: left !important;
  text-transform: capitalize;
}
</style>
</td>

</tr>

<tr class=\"message-footer\">
<td>
<table class=\"info ty-email-footer-left-part\" width=\"250\" align=\"left\">
  <tr>
    <th class=\"footer-contact__title ty-email-footer\" >
<div class=\"mail-manu\">
<div><a href=\"/auth-loginform\" target=\"_blank\" >";
        // line 18
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "your_account_mail");
        echo "</a></div>
<div><a href=\"/help-center\" target=\"_blank\" >";
        // line 19
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "help_center_mail");
        echo "</a></div>
<div><a href=\"/faq\" target=\"_blank\" >";
        // line 20
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "faq_mail");
        echo "</a></div>
<div><a href=\"/buyer-protection\" target=\"_blank\" >";
        // line 21
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "buyer_protection_mail");
        echo "</a></div>
</div>
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer\" style=\"text-align: center;\">
      
    </td>
  </tr>
</table>

<table class=\"info ty-email-footer-right-part\" width=\"250\" align=\"right\">
  <tr>
    <th class=\"footer-social__title ty-email-footer\" style=\"text-align: center;\">
      ";
        // line 35
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "get_social");
        echo "
    </th>
  </tr>
  <tr>
    <td class=\"ty-email-footer-social-buttons footer-social\">
      <table cellspacing=\"0\" cellpadding=\"0\" align=\"center\">
        <tr>
          <td>
            <a href=\"https://www.facebook.com\"><img width=\"30\" height=\"30\" src=\"https://is2or.com/images/facebook.png\" alt=\"Facebook\"></a>
          </td>
<td>
            <a href=\"https://x.com\"><img width=\"30\" height=\"30\" src=\"https://is2or.com/design/themes/responsive/mail/media/images/social/x1.png\" alt=\"X\"></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</td >
</tr >
";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 55)) {
            // line 56
            echo "<tr class=\"message-copyright\" style=\"background-color:#161e2d;\">
<td>
<table class=\"copyright\" width=\"100%\" >
<tr>
  <td style=\"color: #fff;\" align=\"center\">
    ";
            // line 61
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "copyright_mail");
            echo " &copy;&nbsp;";
            echo twig_get_attribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 61);
            echo ".";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "all_rights_reserved_mail");
            echo ".
  </td>
  <td >

  </td>
</tr>
</table>
</td>
</tr>
";
        }
        // line 71
        echo "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__951b23f20043c62f25d559aa5c6fe2d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 71,  117 => 61,  110 => 56,  108 => 55,  85 => 35,  68 => 21,  64 => 20,  60 => 19,  56 => 18,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__951b23f20043c62f25d559aa5c6fe2d9", "");
    }
}
