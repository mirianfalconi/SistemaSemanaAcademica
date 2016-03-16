<?php

Form::macro('classes', function($nome, $placeholder, $pattern, $max)
{

    return "<div class='form-group'>
              <label class='col-md-4 control-label'>$placeholder</label>
              <div class='col-md-6'>" .
            Form::text($nome, old($nome), ['class'=> 'form-control',
            'pattern' => $pattern, 'max' => $max])
            . "</div>
            </div>";

});

Form::macro('pass', function($nome, $placeholder)
{

    return "<div class='form-group'>
              <label class='col-md-4 control-label'>$placeholder</label>
              <div class='col-md-6'>
              <input type='password' name='$nome' class='form-control' max='45'/>
            </div>
            </div>";

});

Form::macro('enviar', function()
{

    return '<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Enviar
								</button>
							</div>
						</div>';

});


?>
