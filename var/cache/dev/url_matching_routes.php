<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/company' => [[['_route' => 'app_company_index', '_controller' => 'App\\Controller\\CompanyController::index'], null, ['GET' => 0], null, true, false, null]],
        '/company/new' => [[['_route' => 'app_company_new', '_controller' => 'App\\Controller\\CompanyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/resume' => [[['_route' => 'app_resume_index', '_controller' => 'App\\Controller\\ResumeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/resume/new' => [[['_route' => 'app_resume_new', '_controller' => 'App\\Controller\\ResumeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/resume/submission/new' => [[['_route' => 'app_resume_submission_new', '_controller' => 'App\\Controller\\ResumeSubmissionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/statistics' => [[['_route' => 'statistics', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/company/([^/]++)(?'
                    .'|(*:62)'
                    .'|/edit(*:74)'
                    .'|(*:81)'
                .')'
                .'|/resume/(?'
                    .'|([^/]++)(?'
                        .'|(*:111)'
                        .'|/edit(*:124)'
                        .'|(*:132)'
                    .')'
                    .'|submission(?'
                        .'|(*:154)'
                        .'|/([^/]++)(?'
                            .'|(*:174)'
                            .'|/edit(*:187)'
                            .'|(*:195)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [[['_route' => 'app_company_show', '_controller' => 'App\\Controller\\CompanyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_company_edit', '_controller' => 'App\\Controller\\CompanyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_company_delete', '_controller' => 'App\\Controller\\CompanyController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        111 => [[['_route' => 'app_resume_show', '_controller' => 'App\\Controller\\ResumeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'app_resume_edit', '_controller' => 'App\\Controller\\ResumeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        132 => [[['_route' => 'app_resume_delete', '_controller' => 'App\\Controller\\ResumeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        154 => [[['_route' => 'app_resume_submission_index', '_controller' => 'App\\Controller\\ResumeSubmissionController::index'], [], ['GET' => 0], null, true, false, null]],
        174 => [[['_route' => 'app_resume_submission_show', '_controller' => 'App\\Controller\\ResumeSubmissionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        187 => [[['_route' => 'app_resume_submission_edit', '_controller' => 'App\\Controller\\ResumeSubmissionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        195 => [
            [['_route' => 'app_resume_submission_delete', '_controller' => 'App\\Controller\\ResumeSubmissionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
