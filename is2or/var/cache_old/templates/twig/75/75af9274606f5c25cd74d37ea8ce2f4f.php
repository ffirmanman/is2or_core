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

/* __string_template__d8423e4c8ddca5dae21ab0f44d12aad5 */
class __TwigTemplate_4f569eb957f0b63f93e190f30ba2b551 extends Template
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
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "header", ["title" => $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "recover_password_subj")]);
        yield "
        ";
        // line 2
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "hello");
        yield "<br /><br />
        ";
        // line 3
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password_recovery.text_confirm", ["[site]" => ($context["company_name"] ?? null)]);
        yield "<br /><br />
        ";
        // line 4
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "password_recovery.link_expire");
        yield ":<br /><br />
        <a href=\"";
        // line 5
        yield ($context["url"] ?? null);
        yield "\">";
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->punyDecodeFilter(($context["url"] ?? null));
        yield "</a>
    ";
        // line 6
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "footer");
        yield "
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__d8423e4c8ddca5dae21ab0f44d12aad5";
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
        return array (  60 => 6,  54 => 5,  50 => 4,  46 => 3,  42 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d8423e4c8ddca5dae21ab0f44d12aad5", "");
    }
}
