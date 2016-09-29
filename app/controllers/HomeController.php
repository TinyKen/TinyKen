<?php

/**
 * Created by PhpStorm.
 * User: kenfo
 * Date: 2016/9/28
 * Time: 17:00
 */

class HomeController extends BaseController
{
    public function home()
    {

        //邮件测试
        Mail::to(['xxg3053@qq.com'])
            ->from('MotherFucker <xxg3053@163.com>')
            ->title('Fuck Me!')
            ->content('<h1>Hello~~</h1>')
            ->send();

        //Redis::set('key','value',5,'s');
        //echo Redis::get('key');

        //视图
        return View::make('home')->with('article',Article::first())
            ->withTitle('MFFC :-D')
            ->withFuckMe('OK!');

        //json
        //return View::json(['a','a']);





    }
}