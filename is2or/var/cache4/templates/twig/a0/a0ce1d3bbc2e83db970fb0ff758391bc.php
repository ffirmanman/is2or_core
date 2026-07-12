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

/* __string_template__bc00cbf1eb5c9bcd10f82ec90d34ca11 */
class __TwigTemplate_89b0d8e03daaa297626d41b53f3234bb extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header");
        echo "

";
        // line 3
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "vendor_candidate_notification", ["[href]" => ($context["company_update_url"] ?? null)]);
        echo "

<br/><br/>

<table>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 9
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "company_name");
        echo ":&nbsp;</td>
        <td>";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company", [], "any", false, false, false, 10);
        echo "</td>
    </tr>

    ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_description", [], "any", false, false, false, 13)) {
            // line 14
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 15
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "description");
            echo ":&nbsp;</td>
        <td>";
            // line 16
            echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_description", [], "any", false, false, false, 16);
            echo "</td>
    </tr>
    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "request_account_name", [], "any", false, false, false, 20)) {
            // line 21
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 22
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "account_name");
            echo ":&nbsp;</td>
        <td>";
            // line 23
            echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "request_account_name", [], "any", false, false, false, 23);
            echo "</td>
    </tr>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "admin_firstname", [], "any", false, false, false, 27)) {
            // line 28
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 29
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "first_name");
            echo ":&nbsp;</td>
        <td>";
            // line 30
            echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "admin_firstname", [], "any", false, false, false, 30);
            echo "</td>
    </tr>
    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "admin_lastname", [], "any", false, false, false, 34)) {
            // line 35
            echo "    <tr>
        <td class=\"form-field-caption\" nowrap>";
            // line 36
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "last_name");
            echo ":&nbsp;</td>
        <td>";
            // line 37
            echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "admin_lastname", [], "any", false, false, false, 37);
            echo "</td>
    </tr>
    ";
        }
        // line 40
        echo "
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 42
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "email");
        echo ":&nbsp;</td>
        <td>";
        // line 43
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 43);
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 46
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "phone");
        echo ":&nbsp;</td>
        <td><span dir=\"ltr\">";
        // line 47
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 47);
        echo "</span></td>
    </tr>
    <tr>

    ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "url", [], "any", false, false, false, 51)) {
            // line 52
            echo "        <td class=\"form-field-caption\" nowrap>";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "url");
            echo ":&nbsp;</td>
        <td >";
            // line 53
            echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "url", [], "any", false, false, false, 53);
            echo "</td>
    </tr>
    ";
        }
        // line 56
        echo "
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 58
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "address");
        echo ":&nbsp;</td>
        <td>";
        // line 59
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 59);
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 62
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "city");
        echo ":&nbsp;</td>
        <td>";
        // line 63
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "city", [], "any", false, false, false, 63);
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 66
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "country");
        echo ":&nbsp;</td>
        <td>";
        // line 67
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "country", [], "any", false, false, false, 67);
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 70
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "state");
        echo ":&nbsp;</td>
        <td>";
        // line 71
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "state", [], "any", false, false, false, 71);
        echo "</td>
    </tr>
    <tr>
        <td class=\"form-field-caption\" nowrap>";
        // line 74
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "zip_postal_code");
        echo ":&nbsp;</td>
        <td >";
        // line 75
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "zipcode", [], "any", false, false, false, 75);
        echo "</td>
    </tr>
</table>

";
        // line 79
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        echo "
";
    }

    public function getTemplateName()
    {
        return "__string_template__bc00cbf1eb5c9bcd10f82ec90d34ca11";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 79,  216 => 75,  212 => 74,  206 => 71,  202 => 70,  196 => 67,  192 => 66,  186 => 63,  182 => 62,  176 => 59,  172 => 58,  168 => 56,  162 => 53,  157 => 52,  155 => 51,  148 => 47,  144 => 46,  138 => 43,  134 => 42,  130 => 40,  124 => 37,  120 => 36,  117 => 35,  115 => 34,  112 => 33,  106 => 30,  102 => 29,  99 => 28,  97 => 27,  94 => 26,  88 => 23,  84 => 22,  81 => 21,  79 => 20,  76 => 19,  70 => 16,  66 => 15,  63 => 14,  61 => 13,  55 => 10,  51 => 9,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__bc00cbf1eb5c9bcd10f82ec90d34ca11", "");
    }
}
