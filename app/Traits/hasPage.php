<?php

namespace App\Traits;

use App\Models\Page;

trait hasPage
{
  public function page()
  {
    return $this->morphOne(Page::class, 'pageable');
  }
}
