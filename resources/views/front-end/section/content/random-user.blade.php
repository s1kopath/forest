<div class="uk-section in-equity-2 uk-background-contain uk-background-center">
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="row">
                <div class="col-md-4 rounded px-3 py-2 border" style="height: 200px">
                    <table>
                        <thead>
                            <th colspan="3" class="text-center">New Registration</th>
                        </thead>
                        <tbody id="new-registration">

                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 rounded px-3 py-2 border" style="height: 200px">
                    <table>
                        <thead>
                            <th colspan="3" class="text-center">Deposit</th>
                        </thead>
                        <tbody id="demo-deposit">

                        </tbody>
                    </table>
                </div>
                <div class="col-md-4 rounded px-3 py-2 border" style="height: 200px">
                    <table>
                        <thead>
                            <th colspan="3" class="text-center">Withdrawal</th>
                        </thead>
                        <tbody id="demo-withdraw">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@push('page-script')
    <script>
        const url = 'https://randomuser.me/api/';

        $(document).ready(function() {
            for (let i = 0; i < 5; i++) {
                customUser();
                demoDeposit();
                demoWithdraw();
            }
        });

        function customUser() {
            fetch(url)
                .then(response => {
                    return response.json();
                })
                .then(profile => {
                    var arr = [profile.results[0].location.country, profile.results[0].login.username, profile.results[
                            0].name
                        .first + " " + profile.results[0].name.last
                    ];

                    fetch("https://restcountries.com/v3.1/name/" + arr[0] +
                            "?fullText=true&fields=flags")
                        .then(response => {
                            return response.json();
                        })
                        .then(flags => {
                            content = `
                            <tr>
                                <td style="width: 50px"><img src="${flags[0].flags.png}" width="30px" height="20px"></td>
                                <td style="width: 80px">${arr[1].substring(1, 4)}***${arr[1].substring(arr[1].length - 4, arr[1].length - 1)}</td>
                                <td style="width: 160px" class="text-right">${arr[2]}</td>
                            </tr>`;

                            $('#new-registration').prepend(content).fadeIn('slow');

                            if ($('#new-registration tr').length > 5) {
                                $('#new-registration tr').last().remove();
                            }
                        })
                })
        }

        function demoDeposit() {
            fetch(url)
                .then(response => {
                    return response.json();
                })
                .then(deposit => {
                    var arr = [deposit.results[0].location.country, deposit.results[0].name.first + " " + deposit
                        .results[0].name.last, getRndInteger(520, 15200),
                    ];

                    fetch("https://restcountries.com/v3.1/name/" + arr[0] +
                            "?fullText=true&fields=flags")
                        .then(response => {
                            return response.json();
                        })
                        .then(flags => {
                            content = `
                                <tr>
                                    <td style="width: 50px"><img src="${flags[0].flags.png}" width="30px" height="20px"></td>
                                    <td style="width: 150px">${arr[1]}</td>
                                    <td style="width: 100px" class="text-right">$${arr[2]}</td>
                                </tr>`;

                            $('#demo-deposit').prepend(content).fadeIn('slow');

                            if ($('#demo-deposit tr').length > 5) {
                                $('#demo-deposit tr').last().remove();
                            }
                        })
                })
        }

        function demoWithdraw() {
            fetch(url)
                .then(response => {
                    return response.json();
                })
                .then(deposit => {
                    var arr = [deposit.results[0].location.country, deposit.results[0].name.first + " " + deposit
                        .results[0].name.last, getRndInteger(50, 500),
                    ];

                    fetch("https://restcountries.com/v3.1/name/" + arr[0] +
                            "?fullText=true&fields=flags")
                        .then(response => {
                            return response.json();
                        })
                        .then(flags => {
                            content = `
                                <tr>
                                    <td style="width: 50px"><img src="${flags[0].flags.png}" width="30px" height="20px"></td>
                                    <td style="width: 150px">${arr[1]}</td>
                                    <td style="width: 100px" class="text-right">$${arr[2]}</td>
                                </tr>`;

                            $('#demo-withdraw').prepend(content).fadeIn('slow');

                            if ($('#demo-withdraw tr').length > 5) {
                                $('#demo-withdraw tr').last().remove();
                            }
                        })
                })
        }

        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        setInterval(customUser, 6000);
        setInterval(demoDeposit, 9000);
        setInterval(demoWithdraw, 7000);
    </script>
@endpush
