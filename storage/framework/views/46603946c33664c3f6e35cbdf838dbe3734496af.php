
<?php $__env->startSection('content'); ?>
	
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3>Create Property <a href="<?php echo e(route('admin.property.index')); ?>" class="float-right"><i class="fas fa-backward"></i> back</a></h3>
      </div>
      <div class="alert alert-primary alertMessage d-none float-left col-md-4 col-sm-2 offset-4">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="card-body">
        <form method="post" action="<?php echo e(route('admin.property.store')); ?>" enctype="multipart/form-data" id="saveButton">
          <?php echo csrf_field(); ?>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <!-- Basic Detail -->
              <div class="card">
                <div class="card-header property-card">
                  Basic detail
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="title" name="title" autofocus>

                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="error-message-title p-2 text-md-left text-danger"></p>
                  </div>
                             
                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="status">Property Status</label><br>
                        <select name="status"  id="status" class="form-control">
                          <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($status->id); ?>"><?php echo e($status->status); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                      <div class="col-6">
                        <label for="type">Property Type</label><br>
                        <select name="type"  id="type" class="form-control">
                          <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($type->id); ?>"><?php echo e($type->type); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>  
                    </div>        
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="bedroom">Bedroom</label>
                        <input type="number" class="form-control <?php $__errorArgs = ['bedroom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bedroom" name="bedroom" autofocus>

                        <?php $__errorArgs = ['bedroom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="error-message-bedroom p-2 text-md-left text-danger"></p>
                      </div>
                      <div class="col-6">
                        <label for="bathroom">Bathroom</label>
                        <input type="number" class="form-control <?php $__errorArgs = ['bathroom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="bathroom" name="bathroom" autofocus>

                        <?php $__errorArgs = ['bathroom'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="error-message-bathroom p-2 text-md-left text-danger"></p>
                      </div>  
                    </div>        
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="garage">Garages</label>
                        <input type="number" class="form-control <?php $__errorArgs = ['garage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="garage" name="garage" autofocus>

                        <?php $__errorArgs = ['garage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <div class="col-6">
                        <label for="build_year">Build Year</label>
                        <input type="number" class="form-control <?php $__errorArgs = ['build_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="build_year" name="build_year" autofocus>

                        <?php $__errorArgs = ['build_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>  
                    </div>        
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-6">
                        <label for="land_area">Land Area</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['land_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="land_area" name="land_area" autofocus>

                        <?php $__errorArgs = ['land_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="error-message-land-area p-2 text-md-left text-danger"></p>
                      </div>
                      <div class="col-6">
                        <label for="building_area">Building Area</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['building_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="building_area" name="building_area" autofocus>

                        <?php $__errorArgs = ['building_area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <p class="error-message-building-area p-2 text-md-left text-danger"></p>
                      </div>  
                    </div>        
                  </div>

                  <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" class="text-area <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="description" name="description" autofocus rows="7">
                    </textarea>
                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>

                  <div class="form-group">
                    <label for="keyword">Keyword</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['keyword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="keyword" name="keyword" autofocus placeholder="CSV Format">

                    <?php $__errorArgs = ['keyword'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
              </div> 
            
              <!-- Price -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Price
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-8 col-8">
                      <div class="form-group">
                        <label class="sr-only" for="price">Price</label>
                        <div class="input-group mb-2">
                          <div class="input-group-prepend">
                            <div class="input-group-text">฿</div>
                          </div>
                          <input type="text" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="price" placeholder="Price" name="price">
                          <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          
                        </div>
                      </div>
                    </div>
                    <p class="error-message-price p-2 text-md-left text-danger ml-3"></p>
                    <div class="col-auto mt-2">
                      <a href="#" class="call-us text-primary d-none">Call Us</a>
                      <input type="hidden" name="price" class="call-us">
                    </div>
                  </div>
                  <div class="col-auto my-1">
                    <div class="custom-control custom-checkbox mr-sm-2">
                      <input type="checkbox" class="custom-control-input" id="keepPrice">
                      <label class="custom-control-label" for="keepPrice">Keep Price Confidential</label>
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Feature -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Feature
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 my-1">
                      <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="<?php echo e($feature->feature); ?>" name="feature[]" multiple="multiple" value="<?php echo e($feature->id); ?>">
                        <label class="custom-control-label" for="<?php echo e($feature->feature); ?>"><?php echo e($feature->feature); ?></label>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>
              
              <!-- Tag -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Tags
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6 col-sm-12 my-1">
                      <div class="custom-control custom-checkbox mr-sm-2">
                        <input type="checkbox" class="custom-control-input" id="<?php echo e($tag->tag); ?>" name="tag[]" multiple="multiple" value="<?php echo e($tag->id); ?>">
                        <label class="custom-control-label" for="<?php echo e($tag->tag); ?>"><?php echo e($tag->tag); ?></label>
                      </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
              </div>      
            </div>

            
            <div class="col-md-6 col-sm-12">
              <!-- Location -->
              <div class="card">
                <div class="card-header property-card">
                  Location
                </div>
                <div class="card-body">
                    <div class="form-group">
                      <label for="address">Address</label>
                      <input type="text" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="address" name="address" autofocus>

                      <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                      <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <p class="error-message-address p-2 text-md-left text-danger"></p>
                    </div>
                               
                    <div class="form-group">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3851939.0559790777!2d94.47181513781126!3d19.470253532422557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305652a7714e2907%3A0xba7b0ee41c622b11!2sMyanmar%20(Burma)!5e0!3m2!1sen!2smm!4v1584077219243!5m2!1sen!2smm" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-6">
                          <label for="longitude">Longitude</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="longitude" name="longitude" autofocus>

                          <?php $__errorArgs = ['longitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          <p class="error-message-longitude p-2 text-md-left text-danger"></p>
                        </div>
                        <div class="col-6">
                          <label for="latitude">Latitude</label>
                          <input type="text" class="form-control <?php $__errorArgs = ['latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="latitude" name="latitude" autofocus>

                          <?php $__errorArgs = ['latitude'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($message); ?></strong>
                          </span>
                          <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                          <p class="error-message-latitude p-2 text-md-left text-danger"></p>
                        </div>  
                      </div>        
                    </div>
                </div>
              </div> 
              
              <!-- Embed Code -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Video
                </div>
                <div class="card-body m-0">
                  <div class="form-group">
                    <label for="embed_code">Embed Code</label>
                    <input type="text" class="form-control <?php $__errorArgs = ['embed_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="embed_code" name="embed_code" autofocus>

                    <?php $__errorArgs = ['embed_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                </div>
              </div>

              <!-- Floor Plan -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Floor Plan
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <input type="file" class="form-control" id="inlineFormInputGroup" placeholder="" name="floor[]" multiple="multiple">
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Attachments -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Attachments
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <input type="file" class="form-control" id="inlineFormInputGroup" placeholder="" name="attachment[]" multiple="multiple">
                    </div>
                  </div>
                </div>
              </div>
              
              <!-- Gallery -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Gallery
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <div class="col-md-8 ofsset-2 input-group mb-2">
                      <input type="file" class="form-control" id="inlineFormInputGroup" placeholder="" name="gallery[]" multiple="multiple">
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Neighborhood -->
            <div class="col-12">
              <!-- Neighborhood -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Neighborhoods
                </div>
                <div class="card-body m-0 ">
                  <p class="added-neighborhood p-2 text-md-left text-danger"></p>
                  <div class="row container-neighborhood">
                    <div class="col-3">
                      <div class="form-group">
                        <label for="place">Place</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['place'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> place" id="place" name="place" autofocus>

                        <?php $__errorArgs = ['place'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label for="min">Min</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['min'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> min" id="min" name="min" autofocus>
                        <?php $__errorArgs = ['min'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-5">
                      <div class="form-group">
                        <label for="transportation_type" class="d-block">Transportation</label>
                        <div class="row">
                          <?php $__currentLoopData = $transportations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transportation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-3 col-3 neighborhood-type">
                              <?php if($transportation->transportation_type == 'Bicycle'): ?>
                              <input type="hidden" name="transportation_type" value="<?php echo e($transportation->id); ?>" data-type="<?php echo e($transportation->transportation_type); ?>" class="bicycle">
                              <button type="button" class="btn btn-primary btn-sm d-inline-block float-right bicycle"><i class="fas fa-bicycle"></i></button>
                              <?php elseif($transportation->transportation_type == 'Train'): ?>
                              <input type="hidden" name="transportation_type" value="<?php echo e($transportation->id); ?>" data-type="<?php echo e($transportation->transportation_type); ?>" class="train">
                              <button type="button" class="btn btn-primary btn-sm d-inline-block  float-right transportation_type train"><i class="fas fa-train"></i></button>
                              <?php elseif($transportation->transportation_type == 'Car'): ?>
                              <input type="hidden" name="transportation_type" value="<?php echo e($transportation->id); ?>" data-type="<?php echo e($transportation->transportation_type); ?>" class="car">
                              <button type="button" class="btn btn-primary btn-sm d-inline-block float-right transportation_type car"><i class="fas fa-car"></i></button>
                              <?php elseif($transportation->transportation_type == 'Walking'): ?>
                              <input type="hidden" name="transportation_type" value="<?php echo e($transportation->id); ?>" data-type="<?php echo e($transportation->transportation_type); ?>" class="walking">
                              <button type="button" class="btn btn-primary btn-sm d-inline-block float-right transportation_type walking"><i class="fas fa-walking"></i></button>
                              <?php endif; ?>
                            </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      </div>
                    </div>
                    <div class="col-1" style="margin-top: 41px">
                      <button type="button" class="btn btn-primary btn-sm d-inline-block remove-neighborhood float-right"><i class="fas fa-times-circle"></i></button>
                    </div>
                  </div>
                  <p class="append-neighborhood d-inline d-none"></p>
                  <div class="row">
                   <div class="col-1 offset-11">
                     <button type="button" class="btn btn-primary btn-sm d-inline-block add-neighborhood float-right"><i class="fas fa-plus-circle"></i></button>
                   </div>
                  </div>
                  <div class="table-responsive mt-3" id="showNeighborhoodTable">
                    <table class="table table-bordered align-items-center table-white table-flush example" id="" width="100%" cellspacing="0">
                            <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>Place</th>
                                <th>Duration</th>
                                <th>Transportation</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="showNeighborhoodTbody">
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- School -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Schools
                </div>
                <div class="card-body m-0">
                  <p class="added-school p-2 text-md-left text-danger"></p>
                  <div class="row container-school">
                    <div class="col-3">
                      <div class="form-group">
                        <input type="number" class="form-control <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> rating" id="rating" name="rating" autofocus placeholder="Rating">

                        <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name" id="name" name="name" autofocus placeholder="Name">

                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-2">
                      <div class="form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['grade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> grade" id="grade" name="grade" autofocus placeholder="Grade">

                        <?php $__errorArgs = ['grade'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <input type="text" class="form-control <?php $__errorArgs = ['distance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> distance" id="distance" name="distance" autofocus placeholder="distance">

                        <?php $__errorArgs = ['distance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-1" style="margin-top: 13px">
                      <button type="button" class="btn btn-primary btn-sm d-inline-block remove-school float-right"><i class="fas fa-times-circle"></i></button>
                    </div>
                  </div>
                  <p class="append-school d-inline d-none"></p>
                  <div class="row">
                    <div class="col-1 offset-11">
                     <button type="button" class="btn btn-primary btn-sm d-inline-block add-school float-right"><i class="fas fa-plus-circle"></i></button>
                   </div>
                  </div>
                  <div class="table-responsive mt-3" id="showSchoolTable">
                    <table class="table table-bordered align-items-center table-white table-flush example" id="" width="100%" cellspacing="0">
                            <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Rating</th>
                                <th>Grade</th>
                                <th>Distance</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="showSchoolTbody">
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
              
              <!-- Facts -->
              <div class="card mt-2">
                <div class="card-header property-card">
                  Facts
                </div>
                <div class="card-body m-0">
                  <p class="added-fact p-2 text-md-left text-danger"></p>
                  <div class="row container-fact">
                    <div class="col-11">
                      <div class="form-group">
                        <label for="fact">Facts</label>
                        <input type="text" class="form-control <?php $__errorArgs = ['fact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> fact" id="fact" name="fact" autofocus>

                        <?php $__errorArgs = ['fact'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                    </div>
                    <div class="col-1" style="margin-top: 36px">
                      <button type="button" class="btn btn-primary btn-sm d-inline-block remove-fact float-right"><i class="fas fa-times-circle"></i></button>
                    </div>
                  </div>
                  <p class="append-fact d-inline d-none"></p>
                  <div class="row">
                   <div class="col-1 offset-11">
                     <button type="button" class="btn btn-primary btn-sm d-inline-block add-fact float-right"><i class="fas fa-plus-circle"></i></button>
                   </div>
                  </div>
                  <div class="table-responsive mt-3" id="showFactTable">
                    <table class="table table-bordered align-items-center table-white table-flush example" id="" width="100%" cellspacing="0">
                            <thead class="thead-light">
                              <tr>
                                <th>No</th>
                                <th>Fact</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody id="showFactTbody">
                            </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type="submit" id="submitButton" class="btn btn-primary mt-2 float-right" value="submit">
        </form>
      </div>
    </div>
  </div>
</div>                    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
  $(document).ready(function () {

    $('#showNeighborhoodTable').hide()
    $('#showSchoolTable').hide()
    $('#showFactTable').hide()
    $('.bicycle').addClass('current_type');

    /*Neighborhood*/
    /*Remove Neighborhood*/
    $('.card-body').on('click', '.remove-neighborhood', function (argument) {
      $('.container-neighborhood').hide()
    })

    /*Add Neighborhood and Call ShowNeighborhoodTable*/
    var neighborhoodListString='{"neighborhoodList":[]}';
    var neighborhoodListObj=JSON.parse(neighborhoodListString);
    $('.add-neighborhood').click(function (argument) {
      var neighborhood_item_array = []
      var place = $('.place').val()
      var min = $('.min').val()
      var transportation_id = $('.current_type').val()
      var transportation_type = $('.current_type').data('type')
      console.log(place,min,transportation_type)
      if (place && min && transportation_type) {
        var neighborhood={place:place,min:min,transportation_id:transportation_id,transportation_type:transportation_type};
        neighborhoodListObj.neighborhoodList.push(neighborhood);
        $('.container-neighborhood').show()
        $('.added-neighborhood').text("You added one neighborhoods")
        $('.place').val('')
        $('.min').val('')
        showNeighborhoodTable(neighborhoodListObj)
      }
      else {
        $('.container-neighborhood').show()
        $('.added-neighborhood').text("Invalid Place or Duration or Transportation Type")
      }
    })

    
    /*Show Neighborhood Function*/
    function showNeighborhoodTable(neighborhoodListObj) {
      var html = ''
        var j = 1
        console.log(neighborhoodListObj)
        var neighborhood_array=neighborhoodListObj.neighborhoodList;
        $.each(neighborhood_array,function (i,v) {
          html += `<tr>
                    <td>${j++}</td>
                    <td>${v.place}</td>
                    <td>${v.min}</td>
                    <td>${v.transportation_type}</td>
                    <td><button type="button" class="btn btn-sm delete-neighborhood" style="background-color: #5e72e4" data-id=${i}><i class="fas fa-trash text-white" ></i></button>
                  </td></tr>`
        })
        $('#showNeighborhoodTbody').html(html)
      $('#showNeighborhoodTable').show()
    }

    /*Delete Neighborhood By Id*/
    $('#showNeighborhoodTbody').on('click','.delete-neighborhood',function (argument) {
      var neighborhood_id = $(this).data("id")
      console.log(neighborhood_id)
      neighborhoodListObj.neighborhoodList.splice(neighborhood_id, 1)
      showNeighborhoodTable(neighborhoodListObj)
    })

    /*School*/
    /*Remove School*/
    $('.card-body').on('click', '.remove-school', function (argument) {
      $('.container-school').hide()
    })

    /*Add School and Call ShowSchoolTable*/
    var schoolListString='{"schoolList":[]}';
    var schoolListObj=JSON.parse(schoolListString);
    $('.add-school').click(function (argument) {
      var rating = $('.rating').val()
      var name = $('.name').val()
      var grade = $('.grade').val()
      var distance = $('.distance').val()
      if (rating && name && grade && distance) {
        var school={rating:rating,name:name,grade:grade,distance:distance};
        schoolListObj.schoolList.push(school);
        $('.container-school').show()
        $('.added-school').text("You added one near school")
        $('.rating').val('')
        $('.name').val('')
        $('.grade').val('')
        $('.distance').val('')
        showSchoolTable(schoolListObj)
      }
      else {
        $('.container-school').show()
        $('.added-school').text("Invalid Rating or Name or Grade or Distance")
      }
    })

    /*Show School Function*/
    function showSchoolTable(schoolListObj) {
      var html = ''
      var j = 1
      var school_array=schoolListObj.schoolList;
      $.each(school_array,function (i,v) {
        html += `<tr>
                  <td>${j++}</td>
                  <td>${v.name}</td>
                  <td>${v.rating}</td>
                  <td>${v.grade}</td>
                  <td>${v.distance}</td>
                  <td><button type="button" class="btn btn-sm delete-school" style="background-color: #5e72e4" data-id=${i}><i class="fas fa-trash text-white" ></i></button>
                </td></tr>`
      })
      $('#showSchoolTbody').html(html)
      $('#showSchoolTable').show()
    }

    /*Delete school By Id*/
    $('#showSchoolTbody').on('click','.delete-school',function (argument) {
      var school_id = $(this).data("id")
      schoolListObj.schoolList.splice(school_id, 1)
      showSchoolTable(schoolListObj)
    })

    /*Fact*/
    /*Remove Fact*/
    $('.card-body').on('click', '.remove-fact', function (argument) {
      $('.container-fact').hide()
    })

    /*Add Fact and Call ShowFactTable*/
    var factString='{"factList":[]}';
    var factListObj=JSON.parse(factString);
    $('.add-fact').click(function (argument) {
      var fact = $('.fact').val()
      if (fact) {
        var fact={fact:fact};
        factListObj.factList.push(fact);
        $('.container-fact').show()
        $('.fact').val('')
        $('.added-fact').text("You added one fact")
        showFactTable(factListObj)
      }
      else {
        $('.container-fact').show()
        $('.added-fact').text("Invalid Facts")
      }
    })

    /*Show Fact Function*/
    function showFactTable(fact_array) {
      var html = ''
        var j = 1
        var fact_array=factListObj.factList;
        $.each(fact_array,function (i,v) {
          html += `<tr>
                  <td>${j++}</td>
                  <td>${v.fact}</td>
                  <td><button type="button" class="btn btn-sm delete-fact" style="background-color: #5e72e4" data-id=${i}><i class="fas fa-trash text-white" ></i></button>
                  </td></tr>`
        })
        $('#showFactTbody').html(html)
      $('#showFactTable').show()
    }

    /*Delete Fact By Id*/
    $('#showFactTbody').on('click','.delete-fact',function (argument) {
      var fact_id = $(this).data("id")
      factListObj.factList.splice(fact_id, 1)
      showFactTable(factListObj)
    })

    $('.card-body').on('click', '.train', function (argument) {
      $('.train').removeClass('transportation_type');
      $('.bicycle').addClass('transportation_type');
      $('.car').addClass('transportation_type');
      $('.walking').addClass('transportation_type');
      $('.train').addClass('current_type');
      $('.bicycle').removeClass('current_type');
      $('.car').removeClass('current_type');
      $('.walking').removeClass('current_type');
    })
    $('.card-body').on('click', '.bicycle', function (argument) {
      $('.train').addClass('transportation_type');
      $('.bicycle').removeClass('transportation_type');
      $('.car').addClass('transportation_type');
      $('.walking').addClass('transportation_type');
      $('.bicycle').addClass('current_type');
      $('.train').removeClass('current_type');
      $('.car').removeClass('current_type');
      $('.walking').removeClass('current_type');
    })
    $('.card-body').on('click', '.car', function (argument) {
      $('.train').addClass('transportation_type');
      $('.bicycle').addClass('transportation_type');
      $('.car').removeClass('transportation_type');
      $('.walking').addClass('transportation_type');
      $('.car').addClass('current_type');
      $('.bicycle').removeClass('current_type');
      $('.train').removeClass('current_type');
      $('.walking').removeClass('current_type');
    })
    $('.card-body').on('click', '.walking', function (argument) {
      $('.train').addClass('transportation_type');
      $('.bicycle').addClass('transportation_type');
      $('.car').addClass('transportation_type');
      $('.walking').removeClass('transportation_type');
      $('.walking').addClass('current_type');
      $('.bicycle').removeClass('current_type');
      $('.car').removeClass('current_type');
      $('.train').removeClass('current_type');
    })

    $('#keepPrice').click(function (argument) {
      $('.call-us').removeClass('d-none');
      $('.call-us').val(0);
    })

    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
      }
    })

    /*Save Property*/
    $('#saveButton').submit(function (e) {
      e.preventDefault()
      var formData = new FormData(this)
      formData.append("neighborhood_array",JSON.stringify(neighborhoodListObj))
      formData.append("school_array",JSON.stringify(schoolListObj))
      formData.append("fact_array",JSON.stringify(factListObj))
      for (var pair of formData.entries())
        {
         console.log(pair[0]+ ', '+ pair[1]); 
        }
      $.ajax({
          data: formData,
          url: "<?php echo e(route('admin.property.store')); ?>",
          type: "POST",
          dataType:'json',
          cache:false,
          contentType: false,
          processData: false,
          success: function (data) {
            $('#saveButton').trigger("reset")
            $('.alertMessage').removeClass('d-none')
            $('.alertMessage').text(data.success)
            window.location.href="<?php echo e(route('admin.property.index')); ?>"
          },
          error: function (error) {
            var errors=error.responseJSON.errors;
              if(errors){
                console.log(errors)
                  var title=errors.title[0];
                  var bedroom=errors.bedroom[0];
                  var bathroom=errors.bathroom[0];
                  var land_area=errors.land_area[0];
                  var building_area=errors.building_area[0];
                  var price=errors.price[0];
                  var address=errors.address[0];
                  var longitude=errors.longitude[0];
                  var latitude=errors.latitude[0];
                  console.log(title)
                  $('.error-message-title').text(title)
                  $('#title').addClass('border border-danger')
                  $('.error-message-bedroom').text(bedroom)
                  $('#bedroom').addClass('border border-danger')
                  $('.error-message-bathroom').text(bathroom)
                  $('#bathroom').addClass('border border-danger')
                  $('.error-message-land-area').text(land_area)
                  $('#land_area').addClass('border border-danger')
                  $('.error-message-building-area').text(building_area)
                  $('#building_area').addClass('border border-danger')
                  $('.error-message-price').text(price)
                  $('#price').addClass('border border-danger')
                  $('.error-message-address').text(address)
                  $('#address').addClass('border border-danger')
                  $('.error-message-longitude').text(longitude)
                  $('#longitude').addClass('border border-danger')
                  $('.error-message-latitude').text(latitude)
                  $('#latitude').addClass('border border-danger')
              }
          }
      })
    })

  })
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.backend_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/property/resources/views/backend/property/create.blade.php ENDPATH**/ ?>