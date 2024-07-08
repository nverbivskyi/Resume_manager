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

/* resume_submission/show.html.twig */
class __TwigTemplate_5442c27f7d601b409ffc7b93484138ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "resume_submission/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "resume_submission/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "ResumeSubmission";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>ResumeSubmission</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>";
        // line 16
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 16, $this->source); })()), "submissionDate", [], "any", false, false, false, 16)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 16, $this->source); })()), "submissionDate", [], "any", false, false, false, 16), "Y-m-d H:i:s"), "html", null, true)) : (yield ""));
        yield "</td>
            </tr>
            <tr>
                <th>CompanyName</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 20, $this->source); })()), "companyName", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>PositiveFeedback</th>
                <td>";
        // line 24
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 24, $this->source); })()), "positiveFeedback", [], "any", false, false, false, 24)) ? ("Yes") : ("No"));
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resume_submission_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_resume_submission_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resume_submission"]) || array_key_exists("resume_submission", $context) ? $context["resume_submission"] : (function () { throw new RuntimeError('Variable "resume_submission" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 33
        yield Twig\Extension\CoreExtension::include($this->env, $context, "resume_submission/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "resume_submission/show.html.twig";
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
        return array (  122 => 33,  117 => 31,  112 => 29,  104 => 24,  97 => 20,  90 => 16,  83 => 12,  75 => 6,  68 => 5,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ResumeSubmission{% endblock %}

{% block body %}
    <h1>ResumeSubmission</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ resume_submission.id }}</td>
            </tr>
            <tr>
                <th>SubmissionDate</th>
                <td>{{ resume_submission.submissionDate ? resume_submission.submissionDate|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>CompanyName</th>
                <td>{{ resume_submission.companyName }}</td>
            </tr>
            <tr>
                <th>PositiveFeedback</th>
                <td>{{ resume_submission.positiveFeedback ? 'Yes' : 'No' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_resume_submission_index') }}\">back to list</a>

    <a href=\"{{ path('app_resume_submission_edit', {'id': resume_submission.id}) }}\">edit</a>

    {{ include('resume_submission/_delete_form.html.twig') }}
{% endblock %}
", "resume_submission/show.html.twig", "/Users/user/resume_manager/templates/resume_submission/show.html.twig");
    }
}
