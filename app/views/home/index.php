<div class="container">

    <div class="card mt-5">
        <div class="card-header text-dark text-start">
            <h5 class="card-title m-0 d-flex justify-content-between align-items-center">
                Log Data
            </h5>
        </div>
        <div class="card-body bg-light">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-secondary">
                        <tr>
                            <th width="" scope="col">ID</th>
                            <th width="" scope="col">Timestamp</th>
                            <!-- <th width="30%" scope="col">Target</th>
                            <th width="30%" scope="col">Attacker</th> -->
                            <th width="" scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['log'] as $logValue) : ?>
                            <tr>
                                <td><?= $logValue['id']; ?></td>
                                <td>
                                    <?= $logValue['snort_date']; ?><br>
                                    <?= $logValue['snort_time']; ?>
                                </td>
                                <!-- <td>
                                    <?= $logValue['target_hostname']; ?><br>
                                    <?= $logValue['target_ip']; ?> / <?= $logValue['target_port']; ?><br>
                                    <?= $logValue['target_mac_addr']; ?>
                                </td>
                                <td>
                                    <?= $logValue['attacker_ip']; ?> / <?= $logValue['attacker_port']; ?><br>
                                    <?= $logValue['attacker_mac_addr']; ?><br>
                                    <?= $logValue['protocol']; ?><br>
                                </td> -->
                                <td><?= $logValue['type']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer bg-light text-secondary text-end">
            <p>log count : <strong><?= $data['log_count']; ?></strong></p>
        </div>
    </div>

</div>