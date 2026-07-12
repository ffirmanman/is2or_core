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

/* __string_template__abd6553bffe8a2b56fc6e4a191fcfaee */
class __TwigTemplate_f35918f156ee909ef222e4b317b598bf extends \Twig\Template
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
        if (((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif (((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_disable_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif ((((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A")))) {
            echo "    ";
            echo $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__abd6553bffe8a2b56fc6e4a191fcfaee";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__abd6553bffe8a2b56fc6e4a191fcfaee", "");
    }
}
