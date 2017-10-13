<style>
.glyphicon { margin-right:10px; }
.panel-group { margin: 6px 0; }
.panel-body { padding:0px; }
.panel-body table tr td { padding: 4px 0 4px 16px }
.panel-body .table {margin-bottom: 0px; }
.static-categories{margin-bottom: 6px}
.static-categories .panel{margin-bottom:0;border-radius:4px}
.static-categories .panel+.panel{margin-top:5px}
.static-categories .panel-heading{border-bottom:0}
.static-categories .panel-heading+.panel-collapse>.list-group,.static-categories .panel-heading+.panel-collapse>.panel-body{border-top:1px solid #ddd}
.static-categories .panel-footer{border-top:0}
.static-categories .panel-footer+.panel-collapse .panel-body{border-bottom:1px solid #ddd}
.part-search-panel table tr td {padding: 0;}
.part-search-panel .navbar-form {margin: 20px 0;}
td a {font-size: 12px;}
.panel-heading h4.panel-title a {font-size: 14px;}
.panel-heading {padding: 8px 14px;}
</style>

<?php //get_template_part('includes/navbar-search'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
          <select id="facility_select">
            <option value="" selected disabled>SHOP BY FACILITY</option>
            <option value="hospital">hospital</option>
            <option value="education">education</option>
            <option value="long-term-care">three</option>
            <option value="four">four</option>
            <option value="five">five</option>
          </select>
            <div class="panel-group hospital sidebar-replace" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">hospital beds</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">hill-rom</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">stryker</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">invacare</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">medline</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">medical supplies</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">pharmacy</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">IV supplies</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">adhesives</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">gloves</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">refrigerators and freezers</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">compact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">counter height</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">full size</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">vaccine</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">medical equipment</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">AEDs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">anatomical models</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">diagnostic equipment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">surgical</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-group education sidebar-replace" id="accordion2">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Anatomical Models</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">AEDs, Defibrillators &amp; CPR</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion3" href="#collapse13">Physical Therapy</a>
                        </h4>
                    </div>
                    <div id="collapse13" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/cpm-padding-kit/"><span>CPM Padding Kit</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/cushions-and-positioners/"><span>Cushions and Positioners</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/daily-living-aids/"><span>Daily Living Aids</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-aids/"><span>Exercise Aids</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-equipment/"><span>Exercise &amp; Mobility Equipment</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/exercise-machines/"><span>Exercise Machines</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hand-therapy-tables/"><span>Hand Therapy Tables</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hi-lo-tables/"><span>Hi-Lo Tables</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/hot-cold-therapy/"><span>Hot &amp; Cold Therapy</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/mat-platforms/"><span>Mat Platforms</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/mirrors/"><span>Mirrors</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/parallel-bars/"><span>Parallel Bars</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/pain-relief-first-aid/"><span>Pain Relief &amp; First Aid</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/rack-wagons-and-organizers/"><span>Racks, Wagons, and Organizers</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/recovery-aids/"><span>Recovery Aids</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/staircases/"><span>Staircases</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/stress-test-systems/"><span>Stress Test Systems</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/whirlpool-tables-and-chairs/"><span>Whirlpool Tables and Chairs</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/work-activity-tables/"><span>Work Activity Tables</span></a></td></tr>
                              <tr><td><a href="https://diamedicalusa.com/product-category/physical-therapy/work-conditioning/"><span>Work Conditioning</span></a></td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion3" href="#collapse16">Automated Medication Dispensing</a>
                    </h4>
                  </div>
                  <div id="collapse16" class="panel-collapse collapse">
                    <div class="panel-body">
                      <table class="table">
                        <tr>
                          <td>
                            <a href="#">AEDs</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">anatomical models</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">diagnostic equipment</a>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <a href="#">surgical</a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
            </div>

            <div class="panel-group long-term-care sidebar-replace" id="accordion3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">crash carts</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">loaded emergency packs</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">item</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven">sim meds</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">compact</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">counter height</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">full size</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">vaccine</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEight">infusion pumps</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">AEDs</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">anatomical models</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">diagnostic equipment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">surgical</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="static-categories" id="">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent=".static-categories" href="#collapseNine">parts search</a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body part-search-panel">
                            <table class="table">
                                <tr>
                                    <td>
                                        <?php get_template_part('includes/navbar-search'); ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent=".static-categories" href="#collapseTen">service | repairs</a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">hospital bed service</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">infusion pump service</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">component repair</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">exam table service</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">headwall installation</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">patient monitor repair</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">stretcher repair</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent=".static-categories" href="#collapseEleven">manufacturers</a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">alaris</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">baxter</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">hill-rom</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">invacare</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">hospira</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">medline</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">midmark</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">simlabsolutions</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">span america</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">stryker</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">view all</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent=".static-categories" href="#collapse18">contact us</a>
                        </h4>
                    </div>
                    <div id="collapse18" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                  <td>
                                    <a href="#">contact</a>
                                  </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">terms and conditions</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">shipping and returns</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent=".static-categories" href="#collapse17">my account</a>
                        </h4>
                    </div>
                    <div id="collapse17" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="#">cart</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">account settings</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">logout</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
