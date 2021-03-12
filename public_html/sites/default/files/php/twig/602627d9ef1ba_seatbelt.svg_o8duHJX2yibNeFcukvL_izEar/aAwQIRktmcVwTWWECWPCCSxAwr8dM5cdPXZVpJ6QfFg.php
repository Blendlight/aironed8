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

/* themes/custom/airchoiceone/images/icons/seatbelt.svg */
class __TwigTemplate_0fac705be1e66a07f3305fb388b209a6785816dd29c94e6a16d3a31ca011e51d extends \Twig\Template
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
        echo "<svg width=\"100pt\" height=\"100pt\" version=\"1.1\" viewBox=\"0 0 100 100\" xmlns=\"http://www.w3.org/2000/svg\">
<path d=\"m96.418 14.52-10.938-10.938c-0.60938-0.60938-1.6016-0.60938-2.2109 0l-17.645 17.645-2.9375-2.9375v0.003907c-1.8516-1.7695-4.7734-1.7695-6.625 0l-9.6445 9.6445c-1.832 1.8281-1.832 4.7969 0 6.625l1.375 1.375-9.1875 9.1875c-1.832 1.8281-1.832 4.7969 0 6.625l9.6406 9.6445c0.87891 0.87891 2.0742 1.375 3.3164 1.375s2.4336-0.49609 3.3125-1.375l9.1875-9.1836 1.3711 1.375v-0.003907c0.87891 0.87891 2.0742 1.375 3.3164 1.375s2.4336-0.49609 3.3125-1.375l3.5859-3.582h19.664c0.41406 0 0.8125-0.16406 1.1055-0.45703s0.45703-0.69141 0.45703-1.1055v-14.062c0-0.41406-0.16406-0.8125-0.45703-1.1055s-0.69141-0.45703-1.1055-0.45703h-14.977l16.082-16.082c0.60938-0.60938 0.60938-1.6016 0-2.2109zm-43.75 44.664v0.003906c-0.61719 0.58984-1.5938 0.58984-2.2109 0l-9.6406-9.6445c-0.60938-0.60938-0.60938-1.6016 0-2.2109l9.1836-9.1836 11.852 11.852zm17.188-7.8125v0.003906c-0.61719 0.58984-1.5938 0.58984-2.2109 0l-19.016-19.02c-0.60938-0.60938-0.60938-1.6016 0-2.2109l9.6445-9.6445c0.60937-0.60938 1.5977-0.60938 2.207 0l19.016 19.02c0.60938 0.60938 0.60938 1.6016 0 2.2109zm23.895-4.4961h-14.977l2.9375-2.9375h-0.003907c1.832-1.8281 1.832-4.7969 0-6.625l-1.3711-1.375h13.414zm-17.188-14.711-8.7266-8.7266 16.539-16.539 8.7266 8.7266z\"/>
<path d=\"m60.48 25.457c-0.60938-0.60938-1.6016-0.60938-2.2109 0l-4.6875 4.6875c-0.60938 0.60938-0.60938 1.6016 0 2.2109l14.062 14.062c0.60938 0.60938 1.6016 0.60938 2.2109 0l4.6875-4.6875c0.60938-0.60938 0.60938-1.6016 0-2.2109zm8.2695 17.645-11.852-11.852 2.4766-2.4766 11.852 11.852z\"/>
<path d=\"m48.895 42.645-4.6875 4.6875c-0.60938 0.60938-0.60938 1.6016 0 2.2109l6.25 6.25c0.60938 0.60938 1.6016 0.60938 2.2109 0l4.6875-4.6875c0.60938-0.60938 0.60938-1.6016 0-2.2109l-6.25-6.25c-0.60938-0.60938-1.6016-0.60938-2.2109 0zm5.1445 7.3555-2.4766 2.4766-4.0391-4.0391 2.4766-2.4766z\"/>
<path d=\"m3.582 85.48 10.938 10.938c0.60938 0.60938 1.6016 0.60938 2.2109 0l8.2695-8.2695 1.3711 1.375v-0.003907c0.87891 0.87891 2.0742 1.375 3.3164 1.375s2.4336-0.49609 3.3125-1.375l16.543-16.539c0.60938-0.60938 0.60938-1.6016 0-2.2109l-20.312-20.312c-0.60938-0.60938-1.6016-0.60938-2.2109 0l-16.539 16.543c-1.832 1.8281-1.832 4.7969 0 6.625l1.3711 1.375-8.2695 8.2695c-0.60938 0.60938-0.60938 1.6016 0 2.2109zm9.1055-16.273 15.438-15.434 18.102 18.102-15.438 15.438h0.003907c-0.61719 0.58984-1.5938 0.58984-2.2109 0l-15.891-15.895c-0.60938-0.60938-0.60938-1.6016 0-2.2109zm1.375 8.0039 8.7266 8.7266-7.1641 7.1641-8.7266-8.7266z\"/>
<path d=\"m28.582 83.918c0.60938 0.60938 1.6016 0.60938 2.2109 0l10.938-10.938c0.60938-0.60938 0.60938-1.6016 0-2.2109l-12.5-12.5c-0.60938-0.60938-1.6016-0.60938-2.2109 0l-10.938 10.938c-0.60938 0.60938-0.60938 1.6016 0 2.2109zm-0.45703-22.332 10.289 10.289-8.7266 8.7266-10.289-10.289z\"/>
</svg>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/airchoiceone/images/icons/seatbelt.svg";
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
        return new Source("", "themes/custom/airchoiceone/images/icons/seatbelt.svg", "/home/customer/www/airchoiceone.com/public_html/themes/custom/airchoiceone/images/icons/seatbelt.svg");
    }
}