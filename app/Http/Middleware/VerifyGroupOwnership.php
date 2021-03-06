<?php

namespace App\Http\Middleware;

use App\Repositories\GroupRepository;
use Closure;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class VerifyGroupOwnership
{
    private $groupRepository;

    public function __construct(GroupRepository $groupRepository)
    {
        $this->groupRepository = $groupRepository;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $group = $request->route()->parameter('group');
        if(is_null($group)){
            throw new NotFoundHttpException("Group not found");
        }
        if($group->user_id != $request->user()->id){
            throw new NotFoundHttpException("Group not found for user", "Group not found for user");
        }
        return $next($request);
    }
}
