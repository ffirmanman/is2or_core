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

/* __string_template__951b23f20043c62f25d559aa5c6fe2d9 */
class __TwigTemplate_44b39a7e0af69cd44f66d40c577d22da extends Template
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
        yield "<style>
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
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "your_account_mail");
        yield "</a></div>
<div><a href=\"/help-center\" target=\"_blank\" >";
        // line 19
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "help_center_mail");
        yield "</a></div>
<div><a href=\"/faq\" target=\"_blank\" >";
        // line 20
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "faq_mail");
        yield "</a></div>
<div><a href=\"/buyer-protection\" target=\"_blank\" >";
        // line 21
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "buyer_protection_mail");
        yield "</a></div>
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
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "get_social");
        yield "
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
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 55)) {
            // line 56
            yield "<tr class=\"message-copyright\" style=\"background-color:#161e2d;\">
<td>
<table class=\"copyright\" width=\"100%\" >
<tr>
  <td style=\"color: #fff;\" align=\"center\">
    ";
            // line 61
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "copyright_mail");
            yield " &copy;&nbsp;";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["company_data"] ?? null), "company_name", [], "any", false, false, false, 61);
            yield ".";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "all_rights_reserved_mail");
            yield ".
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
        yield "</table>
<!-- content-wrapper -->
</td>
</tr>
</table>
<!-- main-wrapper -->
</body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__951b23f20043c62f25d559aa5c6fe2d9";
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
        return array (  135 => 71,  118 => 61,  111 => 56,  109 => 55,  86 => 35,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__951b23f20043c62f25d559aa5c6fe2d9", "");
    }
}
