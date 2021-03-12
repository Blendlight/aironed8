<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/airchoiceone/images/icons/headphones.svg */
class __TwigTemplate_9c344aa185e32471004ab26d045eb618df291001a65552449e0914f829647699 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"58.796\" height=\"55.356\" viewBox=\"0 0 58.796 55.356\">
  <path d=\"M18.526,61.422A1.024,1.024,0,0,0,17.5,62.448v.684a1.026,1.026,0,0,0,2.051,0v-.684a1.024,1.024,0,0,0-1.026-1.026Z\" transform=\"translate(-10.321 -26.377)\" />
  <path d=\"M18.526,49.422A1.024,1.024,0,0,0,17.5,50.448v.684a1.026,1.026,0,0,0,2.051,0v-.684A1.024,1.024,0,0,0,18.526,49.422Z\" transform=\"translate(-10.321 -22.582)\" />
  <path d=\"M18.526,55.422A1.024,1.024,0,0,0,17.5,56.448v.684a1.026,1.026,0,1,0,2.051,0v-.684A1.024,1.024,0,0,0,18.526,55.422Z\" transform=\"translate(-10.321 -24.479)\" />
  <path d=\"M54.563,50.848h3.055a1.205,1.205,0,0,0,.24,0A8.541,8.541,0,0,0,65.8,42.308v-.889a8.537,8.537,0,0,0-5.571-7.991,23.834,23.834,0,0,0-47.654,0,8.533,8.533,0,0,0-5.571,8v.889a8.546,8.546,0,0,0,8.532,8.532H17.2v3.808a7.867,7.867,0,0,0,7.862,7.862h7.451a4.021,4.021,0,1,0,0-2.051H25.068a5.817,5.817,0,0,1-5.811-5.811V33.927a17.143,17.143,0,1,1,34.285,0v15.9a1.028,1.028,0,0,0,1.02,1.026ZM36.4,59.536a1.969,1.969,0,1,1-1.963,1.971A1.97,1.97,0,0,1,36.4,59.536ZM63.745,41.418v.889a6.5,6.5,0,0,1-5.216,6.359,1.019,1.019,0,0,0-1.875.123H55.589V34.936h1.669a6.489,6.489,0,0,1,6.487,6.482ZM17.207,48.8H15.533a6.486,6.486,0,0,1-6.482-6.482v-.889a6.493,6.493,0,0,1,5.216-6.356,1.021,1.021,0,0,0,1.875-.123h1.066ZM36.4,14.728A19.217,19.217,0,0,0,17.255,32.9H15.169a.885.885,0,0,0-.238,0h-.3a21.782,21.782,0,0,1,43.524,0,8.33,8.33,0,0,0-.895-.048H55.542A19.221,19.221,0,0,0,36.4,14.728Z\" transform=\"translate(-7 -10.163)\" />
  <path d=\"M79.539,48.7v.684a1.026,1.026,0,1,0,2.051,0V48.7a1.026,1.026,0,1,0-2.051,0Z\" transform=\"translate(-29.945 -22.028)\" />
  <path d=\"M80.526,53.672A1.024,1.024,0,0,0,79.5,54.7v.684a1.026,1.026,0,1,0,2.051,0V54.7A1.024,1.024,0,0,0,80.526,53.672Z\" transform=\"translate(-29.933 -23.926)\" />
  <path d=\"M80.526,59.672A1.024,1.024,0,0,0,79.5,60.7v.684a1.026,1.026,0,1,0,2.051,0V60.7A1.024,1.024,0,0,0,80.526,59.672Z\" transform=\"translate(-29.933 -25.824)\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/airchoiceone/images/icons/headphones.svg";
    }

    public function getDebugInfo()
    {
        return array (  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/airchoiceone/images/icons/headphones.svg", "/home/customer/www/airchoiceone.com/public_html/themes/custom/airchoiceone/images/icons/headphones.svg");
    }
}