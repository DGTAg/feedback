<?php
if($type=='peepoo'){
    $bg = '#6A1D84';
    $appName = 'Pee@Poo';
}
else if($type=='smartq'){
    $bg = '#166961';
    $appName = 'SmartQ';
  }
else if($type=='codify'){
    //
    $bg = '#808080';
    $appName = 'Codify';
  }
else if($type=='askgov'){
    $bg = '#C9D662';
    $appName = 'AskGov';
  }
else if($type=='moja'){
    $bg = '#65BEC7';
    $appName = 'Jejak Asnaf';
  }
?>
<div class="row">
    <div class="col-lg-12 header-section" style="background:<?php echo $bg;?>">

        <div class="col-lg-12">
          <!-- Profile pic-->
          <div class="vcard-profile-pic">
            <img src="<?php echo base_url(); ?>assets/img/<?php echo $type;?>.png" id="profile1" class="profileActive" alt=""/>
          </div>
          <!-- /Profile pic -->
            <!--img class="img-responsive" src="img/profile.png" alt=""-->
        </div>

        <div class="intro-text" style="font-size:1.75em;">
            <span><?php echo $appName;?></span>
            <?php if(null!==$this->session->flashdata('submited')) echo "<div class=\"alert alert-info\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>".
              $this->session->flashdata('submited')
            ."</div>"; //else echo "<div class=\"alert alert-danger\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>Problem with your submission...</div>";?>
          
        </div>
    </div>
</div>

<div class="row">

        <div class="col-md-8 col-md-offset-2" style="padding-top:30px;">
          <div>
            <form method="post" action="<?php echo base_url('index.php/proses/submit/'.$type); ?>">
              <div class="cc-selector">
                <div class="row" style="text-align:left;">
                  <div class="col-xs-5">
                    <h4>1:
                      <span>How do you rate the overall <?php echo $appName; ?> apps?</span>
                    </h4>
                  </div>
                  <div class="col-xs-7">
                    <input id="input-q1" class="rating" data-size="md" data-min="0" data-max="5" data-step="1" data-default-caption="{rating} stars" data-star-captions="{}" name="" data-show-clear="false">
                    <input type="hidden" name="v1" id="v1" />
                  </div>
                </div>
                <hr />
                <div class="row" style="text-align:left;">
                  <div class="col-xs-5">
                    <h4>2:
                      <span>Do you think the apps can benefit the citizen?</span>
                    </h4>
                  </div>
                  <div class="col-xs-7">
                    <input id="input-q2" class="rating" data-size="md" data-min="0" data-max="5" data-step="1" data-stars="5"
data-symbol="&#xe005;" data-default-caption="{rating} hearts" data-star-captions="{}" data-show-clear="false">
                    <input type="hidden" name="v2" id="v2" />
                  </div>
                </div>
                <hr />
                <div class="row" style="text-align:left;">
                  <div class="col-xs-5">
                    <h4>3:
                      <span>Would you like to recommend this app to others?</span>
                    </h4>
                  </div>
                  <div class="col-xs-7">
                    <input id="input-q3" class="rating"  data-size="md" data-symbol="&#xf164;" data-glyphicon="false"
data-rating-class="rating-fa" data-default-caption="{rating} likes" data-star-captions="{}" data-min="0" data-max="5" data-step="1" data-show-clear="false">
                    <input type="hidden" name="v3" id="v3" />
                  </div>
                </div>
                <hr />
                <div class="row control-group" style="text-align:left;">
                  <div class="col-xs-12">
                    <h4>4:
                      <span>How would you improve the apps? <span style="color:grey;">[optional]</span></span>
                    </h4>
                  </div>
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Comment</label>
                    <textarea rows="2" class="form-control" placeholder="Comment" id="q4" name="v4"></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group" style="text-align:left;">
                  <div class="col-xs-12">
                    <h4>5:
                      <span>I would like to be notified when the app is available to download. Here's my email : <span style="color:grey;">[optional]</span></span>
                    </h4>
                  </div>
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email Address</label>
                    <input type="email" class="form-control" placeholder="Email Address" id="q5" name="v5">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              </div>

            <div class="row">
                <div class="col-xs-12" style="text-align:center;">
                    <input type="submit" class="btn btn-success btn-xl" id="btnSubmit" value="Submit" />
&nbsp;&nbsp;&nbsp;
                    <input type="reset" class="btn btn-cancel btn-xl" value="Cancel" />
                </div>
            </div>

            </form>

            <div class="row">
                <div class="col-xs-12" style="text-align:center;">
                  <br><br><strong>I am interested to participate in the next Immersion Programme</strong>
                  <br><a target="_blank" href='https://goo.gl/wCQt3g' border='0' style=''><img src='<?php echo base_url(); ?>assets/img/qrcode.png' alt=''></a>
                  <br><a target="_blank" href="https://goo.gl/wCQt3g">https://goo.gl/wCQt3g</a>    
                </div>
            </div>

          </div>
        </div>
</div>
