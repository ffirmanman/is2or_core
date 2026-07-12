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

/* __string_template__e99b2cb31dc3dc7d00053d88d939b358 */
class __TwigTemplate_cfb06ae6d384f784eab393525fa6f561 extends Template
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
        yield "<table width=\"600\" style=\" font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" rel=\"min-width: 800px; font-family: Helvetica, Arial, sans-serif; border-collapse: separate;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
<tbody>
<tr style=\"vertical-align: top;\">
    <td>
        <table width=\"100%;\" cellspacing=\"0\" border=\"0\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-right: 40px; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pickup_point"] ?? null), "is_selected", [], "any", false, false, false, 9)) {
            // line 10
            yield "                ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "pickup_point");
            yield "
                ";
        } else {
            // line 12
            yield "                ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "ship_to");
            yield "
                ";
        }
        // line 14
        yield "            </td>
            <td width=\"50%\" style=\"padding: 0px; padding-bottom: 10px; padding-left: 40px; -webkit-print-color-adjust: exact; vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 17
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_date");
        yield "</span>  ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "timestamp", [], "any", false, false, false, 17);
        yield "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 20
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment");
        yield "</span>  ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["p"] ?? null), "payment", [], "any", false, false, false, 20);
        yield "
                </p>
                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
        // line 23
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        yield "</span>  ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "shippings_method", [], "any", false, false, false, 23);
        yield "
                </p>
                ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 25)) {
            // line 26
            yield "                <p style=\"color: #787878; font-size: 14px; font-family: Helvetica, Arial, sans-serif; padding-bottom: 5px; margin: 0px;\">
                    <span style=\"color: #444444; font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase;\">";
            // line 27
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "tracking_number");
            yield "</span>  ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "tracking_number", [], "any", false, false, false, 27);
            yield "
                </p>
                ";
        }
        // line 30
        yield "            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
<tr>
    <td style=\"padding: 0px;\">
        ";
        // line 38
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->snippetFunction($this->env, $context, "products_table");
        yield "
    </td>
</tr>
<tr>
    <td style=\"padding: 0px; border-top: 2px solid #f5f5f5; padding-top: 10px; font-family: Helvetica, Arial, sans-serif;\">
        <table width=\"100%\" style=\"border-collapse: separate; font-family: Helvetica, Arial, sans-serif;\">
        <tbody>
        <tr>
            <td width=\"66%\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; line-height: 21px; color: #444444; padding-right: 30px; vertical-align:top;\">
                ";
        // line 47
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 47)) {
            // line 48
            yield "                <h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 10px;\">";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "customer_notes");
            yield "</h2>
                ";
            // line 49
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "notes", [], "any", false, false, false, 49);
            yield "
                                ";
        }
        // line 51
        yield "            </td>
            <td width=\"34%\" style=\"vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                <table width=\"100%;\" style=\"font-size: 14px; font-family: Helvetica, Arial, sans-serif; color: #444;\">
                <tbody>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 56
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "subtotal");
        yield "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 58
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "display_subtotal", [], "any", false, false, false, 58);
        yield "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;\">";
        // line 62
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "tax_name", [], "any", false, false, false, 62);
        yield "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 64
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "tax_total", [], "any", false, false, false, 64);
        yield "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td align=\"left\" style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 68
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "shipping");
        yield "
                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 70
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "display_shipping_cost", [], "any", false, false, false, 70);
        yield "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top;\">
                        <td style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\" align=\"left\">";
        // line 74
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "payment_surcharge");
        yield "
                        </td>
                        <td style=\"font-family: Helvetica, Arial, sans-serif;\" align=\"right\">";
        // line 76
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "payment_surcharge", [], "any", false, false, false, 76);
        yield "
                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 80)) {
            yield " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "coupon");
            yield " </div> ";
        }
        // line 81
        yield "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 82)) {
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "coupon_code", [], "any", false, false, false, 82);
            yield " ";
        }
        // line 83
        yield "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 86), "discount", [], "any", false, false, false, 86)) {
            yield " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "including_discount");
            yield " </div> ";
        }
        // line 87
        yield "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 88), "discount", [], "any", false, false, false, 88)) {
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "discount", [], "any", false, false, false, 88);
            yield " ";
        }
        // line 89
        yield "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 92
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 92), "subtotal_discount", [], "any", false, false, false, 92)) {
            yield " <div style=\"padding-bottom: 20px; font-family: Helvetica, Arial, sans-serif;\"> ";
            yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "order_discount");
            yield " </div> ";
        }
        // line 93
        yield "                        </td>
                        <td align=\"right\" style=\"font-family: Helvetica, Arial, sans-serif;\">";
        // line 94
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "raw", [], "any", false, false, false, 94), "subtotal_discount", [], "any", false, false, false, 94)) {
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "subtotal_discount", [], "any", false, false, false, 94);
            yield " ";
        }
        // line 95
        yield "                        </td>
                    </tr>
                    <tr style=\" vertical-align: top; font-size: 22px; font-weight: bold; font-family: Helvetica, Arial, sans-serif;\">
                        <td align=\"left\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 98
        yield $this->extensions['Tygh\Twig\TwigCoreExtension']->translateFunction($this->env, $context, "total");
        yield "
                        </td>
                        <td align=\"right\" style=\"padding-top: 20px; border-top: 1px solid #e8e8e8; font-size: 22px; font-family: Helvetica, Arial, sans-serif;\">";
        // line 100
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["o"] ?? null), "total", [], "any", false, false, false, 100);
        yield "
                        </td>
                    </tr>
                </tbody>
                </table>
            </td>
        </tr>
        </tbody>
        </table>
    </td>
</tr>
</tbody>
</table>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__e99b2cb31dc3dc7d00053d88d939b358";
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
        return array (  257 => 100,  252 => 98,  247 => 95,  241 => 94,  238 => 93,  232 => 92,  227 => 89,  221 => 88,  218 => 87,  212 => 86,  207 => 83,  201 => 82,  198 => 81,  192 => 80,  185 => 76,  180 => 74,  173 => 70,  168 => 68,  161 => 64,  156 => 62,  149 => 58,  144 => 56,  137 => 51,  132 => 49,  127 => 48,  125 => 47,  113 => 38,  103 => 30,  95 => 27,  92 => 26,  90 => 25,  83 => 23,  75 => 20,  67 => 17,  62 => 14,  56 => 12,  50 => 10,  48 => 9,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__e99b2cb31dc3dc7d00053d88d939b358", "");
    }
}
