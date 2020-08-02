<?php

Route::group(
    ['middleware' => ['web']], function () {

        Route::prefix('operador')->group(
            function () {
                Route::group(
                    ['as' => 'operador.'], function () {


                        /**
                         * Actions
                         */
                        Route::prefix('action')->group(
                            function () {
                                Route::namespace('Action')->group(
                                    function () {
                                        Route::group(
                                            ['as' => 'action.'], function () {

                                                Route::resource('actions', 'ActionController');
                                                Route::get('actions/model/{model}', 'ActionController@actionsForModel')->name('actions.model');
                                                Route::get('actions/execute/{modelId}/{actionCod}', 'ActionController@executeAction')->name('actions.execute');

                                            }
                                        );
                                    }
                                );
                            }
                        );




                    }
                );
            }
        );

    }
);