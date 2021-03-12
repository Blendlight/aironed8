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

/* themes/custom/airchoiceone/images/icons/airplane.svg */
class __TwigTemplate_5d8856c12b7c782a85daf64f95ade055bb1f27fd4464782354cb89404597f900 extends \Twig\Template
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
        echo "<svg viewBox=\"0 0 72.782 72.78\" xmlns=\"http://www.w3.org/2000/svg\">
  <path transform=\"translate(-3.126 -3.125)\" d=\"M3.686,38.114,17.03,46.605a1.236,1.236,0,0,0,.652.188H32.7L19.022,74.149A1.215,1.215,0,0,0,20.108,75.9h7.278a1.212,1.212,0,0,0,.97-.485l3.275-4.367h4.246a3.628,3.628,0,0,0,1.077-7.1l3.775-5.034h3.639a3.632,3.632,0,0,0,1.55-6.914l3.909-5.216H70.945a4.962,4.962,0,0,0,2.22-9.4l-2.608-1.3a13.561,13.561,0,0,0-9.5-3.851H49.827l-3.909-5.216a3.632,3.632,0,0,0-1.55-6.914H40.729l-3.775-5.034a3.628,3.628,0,0,0-1.077-7.1H31.632L28.356,3.61a1.212,1.212,0,0,0-.97-.485H20.108A1.215,1.215,0,0,0,19.022,4.88L32.7,32.236H14.792L9.07,20.776a1.214,1.214,0,0,0-1.092-.67H4.339a1.213,1.213,0,0,0-1.213,1.213V37.088a1.219,1.219,0,0,0,.561,1.025Zm33.4,29.3a1.211,1.211,0,0,1-1.213,1.213H33.45L35.27,66.2h.607a1.211,1.211,0,0,1,1.213,1.213ZM44.367,56.5h-1.82l1.82-2.426a1.213,1.213,0,1,1,0,2.426ZM26.779,73.479H22.069L35.413,46.793H46.794ZM44.367,22.533a1.213,1.213,0,1,1,0,2.426l-1.82-2.426ZM35.876,10.4a1.213,1.213,0,0,1,0,2.426h-.606L33.45,10.4ZM22.069,5.551h4.709L46.793,32.237H35.412ZM5.551,22.533H7.228l4.852,9.7H5.551Zm0,12.13h55.5a11.113,11.113,0,0,1,6.957,2.426H62.562v2.426h9.419l.1.049a2.536,2.536,0,0,1-1.134,4.8H18.033L5.551,36.422Z\" data-name=\"Path 14\" />
  <path transform=\"translate(-18.854 -12.911)\" d=\"M73.438,46.875h2.426V49.3H73.438Z\" data-name=\"Path 15\" />
  <path transform=\"translate(-17.456 -12.911)\" d=\"M67.188,46.875h2.426V49.3H67.188Z\" data-name=\"Path 16\" />
  <path transform=\"translate(-16.058 -12.911)\" d=\"M60.938,46.875h2.426V49.3H60.938Z\" data-name=\"Path 17\" />
  <path transform=\"translate(-14.66 -12.911)\" d=\"M54.688,46.875h2.426V49.3H54.688Z\" data-name=\"Path 18\" />
  <path transform=\"translate(-13.262 -12.911)\" d=\"M48.438,46.875h2.426V49.3H48.438Z\" data-name=\"Path 19\" />
  <path transform=\"translate(-11.864 -12.911)\" d=\"M42.188,46.875h2.426V49.3H42.188Z\" data-name=\"Path 20\" />
  <path transform=\"translate(-10.466 -12.911)\" d=\"M35.938,46.875h2.426V49.3H35.938Z\" data-name=\"Path 21\" />
  <path transform=\"translate(-9.068 -12.911)\" d=\"M29.688,46.875h2.426V49.3H29.688Z\" data-name=\"Path 22\" />
  <path transform=\"translate(-7.67 -12.911)\" d=\"M23.438,46.875h2.426V49.3H23.438Z\" data-name=\"Path 23\" />
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/airchoiceone/images/icons/airplane.svg";
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
        return new Source("", "themes/custom/airchoiceone/images/icons/airplane.svg", "/home/customer/www/airchoiceone.com/public_html/themes/custom/airchoiceone/images/icons/airplane.svg");
    }
}