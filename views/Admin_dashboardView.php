<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">Server Statistics</h4>
            </div>
            <div class="content">
                <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                    <div class="legend">
                        <i class="fa fa-circle text-info"></i> Online players: <?= $datas['api']->get("online_players") ?>
                        <br>
                        <i class="fa fa-circle text-danger"></i> Version: <?= $datas['api']->get("version") ?>
                        <br>
                        <i class="fa fa-circle text-warning"></i> Temps de reponce en ms: <?= $datas['api']->get("ping") ?>
                    </div>
                </div>
                <div class="footer">
                    <hr>
                    <a href="/admin/dashboard">
                        <i class="fa fa-history"></i> Update la page pour actualiser
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="card ">
            <div class="header">
                <h4 class="title">Todo list</h4>
            </div>
            <div class="content">
                <div class="table-full-width">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>Sign contract for "What are conference organizers afraid of?"</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                </label>
                            </td>
                            <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                </label>
                            </td>
                            <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                            </td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>Create 4 Invisible User Experiences you Never Knew About</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>Read "Following makes Medium better"</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>Unfollow 5 enemies from twitter</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="footer">
                    <hr>
                    <div class="stats">
                        <a href="/admin/dashboard">
                            <i class="fa fa-history"></i> Update la page pour actualiser
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>