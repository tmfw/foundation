<?php

namespace TMFW\Foundation;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

abstract class BaseController extends Controller
{

    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

}