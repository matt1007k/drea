<?php
function setActive($routeName)
{
    return request()->routeIs($routeName) ? 'active' : '';
}
function setActiveIcon($routeName, $iconNameDefault, $iconNameActive)
{
    return request()->routeIs($routeName) ? $iconNameDefault : $iconNameActive;
}
