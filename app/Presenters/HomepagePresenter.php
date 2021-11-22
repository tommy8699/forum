<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Components\Post\Category\Grid\PresenterTrait as PostCategoryGridPresenterTrait;
use Nette\Application\UI\Presenter;


final class HomepagePresenter extends Presenter
{
    use PostCategoryGridPresenterTrait;

    public function actionDefault():void
    {
        $this->canCreatePostCategoryGridControl = true;
    }
}
