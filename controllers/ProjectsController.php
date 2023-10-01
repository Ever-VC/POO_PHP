<?php

class ProjectsController
{
    public function showProjects()
    {
        require_once "models/Projects.php";
        $projects = new Projects();
        $showProjects= $projects->showProjects();
        require_once "views/projects.php";
    }
}