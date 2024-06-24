@extends('layouts.app')
@section('app-content')
    <div class="row mt-4">
        <div class="col-12 mb-4">
            <div class="card bg-yellow-100 border-0 shadow">
                <div class="card-header d-flex flex-row align-items-center justify-content-center">
                    <div class="d-block mb-2 mb-sm-0 text-center">
                        <h1 class="fw-extrabold mb-0">Statistik Pegawai</h1>
                        <p class="mb-0">Berdasarkan data terkini</p>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-6 d-flex justify-content-center">
                            <div class="chart">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                            <div class="col-8 mb-4">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="row d-block d-xl-flex align-items-center">
                                            <div
                                                class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                                    <img src="{{ asset('assets/img/employees-green.png') }}"
                                                        alt="employe-green" height="40px" width="40px">
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-7 px-xl-0">
                                                <div class="d-none d-sm-block">
                                                    <h2 class="h6 text-gray-400 mb-0">Pegawai Tetap</h2>
                                                    <h3 class="fw-extrabold mb-2" id="pegawai_tetap">0 orang</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 mb-4">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="row d-block d-xl-flex align-items-center">
                                            <div
                                                class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                                    <img src="{{ asset('assets/img/employees-yellow.png') }}"
                                                        alt="employe-yellow" height="40px" width="40px">
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-7 px-xl-0">
                                                <div class="d-none d-sm-block">
                                                    <h2 class="h6 text-gray-400 mb-0">Pegawai Kontrak</h2>
                                                    <h3 class="fw-extrabold mb-2" id="pegawai_kontrak">0 orang</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card border-0 shadow">
                                    <div class="card-body">
                                        <div class="row d-block d-xl-flex align-items-center">
                                            <div
                                                class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                                    <img src="{{ asset('assets/img/employees-blue.png') }}"
                                                        alt="employe-blue" height="40px" width="40px">
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-7 px-xl-0">
                                                <div class="d-none d-sm-block">
                                                    <h2 class="h6 text-gray-400 mb-0">Pegawai Magang</h2>
                                                    <h3 class="fw-extrabold mb-2" id="pegawai_magang">0 orang</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('chartjs')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
    <script>
        $(document).ready(function() {
            function addData() {
                let employeeTetap = [];
                let employeeKontrak = [];
                let employeeMagang = [];
                $.get('http://localhost:8000/api/employee', function(data, status) {
                    data.forEach(employee => {
                        if (employee.status === 'Tetap') {
                            employeeTetap.push(employee);
                        } else if (employee.status === 'Kontrak') {
                            employeeKontrak.push(employee);
                        } else {
                            employeeMagang.push(employee);
                        }
                    });
                    myChart.data.datasets[0].data[0] = employeeTetap.length;
                    myChart.data.datasets[0].data[1] = employeeKontrak.length;
                    myChart.data.datasets[0].data[2] = employeeMagang.length;
                    myChart.update();

                    $('#pegawai_tetap').text(employeeTetap.length + ' orang');
                    $('#pegawai_kontrak').text(employeeKontrak.length + ' orang');
                    $('#pegawai_magang').text(employeeMagang.length + ' orang');
                })
            }
            // myChart
            let chart = document.getElementById('myChart');
            if (chart) {
                var myCanvas = chart.getContext('2d');
                var myChart = new Chart(myCanvas, {
                    type: 'doughnut',
                    data: {
                        labels: ['Pegawai Tetap', 'Pegawai Kontrak', 'Pegawai Magang'],
                        datasets: [{
                            label: 'Data',
                            data: [300, 50, 100],
                            backgroundColor: [
                                'rgb(147, 249, 107)',
                                'rgb(255, 205, 86)',
                                'rgb(105, 101, 235)'
                            ],
                            hoverOffset: 4
                        }]
                    },
                })
            }
            window.setInterval(addData, 3000);
        })
    </script>
@endpush
