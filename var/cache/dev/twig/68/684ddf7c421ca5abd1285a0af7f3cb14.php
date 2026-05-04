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

/* pages/playlist.html.twig */
class __TwigTemplate_53cfcf021dc9004cebc8e21a5e0d9f1a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "basefront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/playlist.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/playlist.html.twig"));

        $this->parent = $this->loadTemplate("basefront.html.twig", "pages/playlist.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        yield "    <div class=\"row mt-3\">
        <div class=\"col\">
            <h4 class=\"text-info mt-5\">";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), "html", null, true);
        yield "</h4>
            <strong>nombre de formations : </strong>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 6, $this->source); })()), "nombreformations", [], "any", false, false, false, 6), "html", null, true);
        yield "<br />
            <strong>catégories : </strong>
                <!-- boucle pour afficher les catégories -->
                ";
        // line 9
        $context["anccategorie"] = "";
        // line 10
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlistcategories"]) || array_key_exists("playlistcategories", $context) ? $context["playlistcategories"] : (function () { throw new RuntimeError('Variable "playlistcategories" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["playlist"]) {
            // line 11
            yield "                    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["playlist"], "name", [], "any", false, false, false, 11), "html", null, true);
            yield "&nbsp;
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['playlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        yield "            <br /><br />
            <strong>description :</strong><br />
                ";
        // line 15
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["playlist"]) || array_key_exists("playlist", $context) ? $context["playlist"] : (function () { throw new RuntimeError('Variable "playlist" does not exist.', 15, $this->source); })()), "description", [], "any", false, false, false, 15), "html", null, true));
        yield "
        </div>
        <div class=\"col\">
            <!-- boucle sur l'affichage des formations -->
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playlistformations"]) || array_key_exists("playlistformations", $context) ? $context["playlistformations"] : (function () { throw new RuntimeError('Variable "playlistformations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 20
            yield "                <div class=\"row mt-1\">
                    <div class=\"col-md-auto\">
                        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 22)) {
                // line 23
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "miniature", [], "any", false, false, false, 24), "html", null, true);
                yield "\">
                            </a>
                        ";
            }
            // line 26
            yield "  
                    </div>
                    <div class=\"col d-flex align-items-center\">
                        <a href=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formations.showone", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            yield "\" 
                           class=\"link-secondary text-decoration-none\">
                            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formation"], "title", [], "any", false, false, false, 31), "html", null, true);
            yield "
                        </a>          
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "        </div>
        
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/playlist.html.twig";
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
        return array (  152 => 36,  141 => 31,  136 => 29,  131 => 26,  125 => 24,  120 => 23,  118 => 22,  114 => 20,  110 => 19,  103 => 15,  99 => 13,  90 => 11,  85 => 10,  83 => 9,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"basefront.html.twig\" %}
{% block body %}
    <div class=\"row mt-3\">
        <div class=\"col\">
            <h4 class=\"text-info mt-5\">{{ playlist.name }}</h4>
            <strong>nombre de formations : </strong>{{ playlist.nombreformations }}<br />
            <strong>catégories : </strong>
                <!-- boucle pour afficher les catégories -->
                {% set anccategorie = '' %}
                {% for playlist in playlistcategories %}
                    {{ playlist.name }}&nbsp;
                {% endfor %}
            <br /><br />
            <strong>description :</strong><br />
                {{ playlist.description|nl2br }}
        </div>
        <div class=\"col\">
            <!-- boucle sur l'affichage des formations -->
            {% for formation in playlistformations %}
                <div class=\"row mt-1\">
                    <div class=\"col-md-auto\">
                        {% if formation.miniature %}
                            <a href=\"{{ path('formations.showone', {id:formation.id}) }}\">
                                <img src=\"{{ formation.miniature }}\">
                            </a>
                        {% endif %}  
                    </div>
                    <div class=\"col d-flex align-items-center\">
                        <a href=\"{{ path('formations.showone', {id:formation.id}) }}\" 
                           class=\"link-secondary text-decoration-none\">
                            {{ formation.title }}
                        </a>          
                    </div>
                </div>
            {% endfor %}
        </div>
        
    </div>
{% endblock %}
", "pages/playlist.html.twig", "C:\\wamp64\\www\\MediaTek86_\\templates\\pages\\playlist.html.twig");
    }
}
