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

/* __string_template__cd8cabd555a87c465ca5cbd23bf6d897 */
class __TwigTemplate_471be4efc40177247b78b409785fc5ba extends \Twig\Template
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
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "dear");
        echo ",";
        echo twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 3);
        echo "<br /><br />

";
        // line 5
        if ((((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A"))) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            // line 6
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_changed", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 6), "[status]" => ($context["status"] ?? null)]);
            echo "
";
        } elseif (((        // line 7
($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            // line 8
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_active_to_pending", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 8)]);
            echo "
";
        } elseif (((        // line 9
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            // line 10
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 10)]);
            echo "
";
        } elseif (((        // line 11
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            // line 12
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_disable", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 12)]);
            echo "
";
        } elseif (((        // line 13
($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            // line 14
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_pending", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 14)]);
            echo "
";
        } elseif (((        // line 15
($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A"))) {
            // line 16
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_pending_to_active", ["[company]" => twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "company_name", [], "any", false, false, false, 16)]);
            echo "
";
        }
        // line 18
        echo "
<br /><br />

";
        // line 21
        if (($context["reason"] ?? null)) {
            // line 22
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "reason");
            echo ": ";
            echo ($context["reason"] ?? null);
            echo "
<br /><br />
";
        }
        // line 25
        echo "
";
        // line 26
        if ((($context["e_account"] ?? null) == "updated")) {
            // line 27
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_updated", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null)]);
            echo "
";
        } elseif ((        // line 28
($context["e_account"] ?? null) == "new")) {
            // line 29
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_administrator_created", ["[link]" => ($context["vendor_url"] ?? null), "[link_text]" => $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["vendor_url"] ?? null)), "[login]" => ($context["e_username"] ?? null), "[password]" => ($context["e_password"] ?? null)]);
            echo "
";
        }
        // line 31
        echo "
";
        // line 32
        echo $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__cd8cabd555a87c465ca5cbd23bf6d897";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 32,  125 => 31,  119 => 29,  117 => 28,  112 => 27,  110 => 26,  107 => 25,  99 => 22,  97 => 21,  92 => 18,  86 => 16,  84 => 15,  79 => 14,  77 => 13,  72 => 12,  70 => 11,  65 => 10,  63 => 9,  58 => 8,  56 => 7,  51 => 6,  49 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__cd8cabd555a87c465ca5cbd23bf6d897", "");
    }
}
