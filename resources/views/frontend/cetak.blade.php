@if($student->status == 1)
<style>
    @media print {

        .printme,
        .printme * {
            visibility: visible;
        }

        html,
        body {
            height: auto;
            font-size: 10pt;
            /* changing to 10pt has no impact */
        }

        @page {

            margin: 20px;

        }

        @media screen {
            div.divFooter {
                display: none;
            }
        }

        @media print {
            div.divFooter {
                position: fixed;
                bottom: 0;
            }
        }

        .nilai {
            page-break-before: always;
        }
    }
</style>

<table border="0" width="100%">
    <tr>
        <td align="center">
            <img src="/files/logo/{{ $school->kop_logo_dinas}}" alt="logo2" width="70">
        </td>
        <td align="center">
            <b style="font-size:13pt; text-transform: uppercase;">{{ $school->kop_nama_disdik }} </b> <br>
            <b style="font-size:14pt; text-transform: uppercase;">{{ $school->kop_nama_sekolah }}</b> <br>
            <b style="font-size:14pt; text-transform: uppercase;">{{ $school->kop_th_pelajaran }}</b> <br>
            <b colspan="3" align="center" style="font-size:12pt;">
                <b>
                {{ $school->kop_alamat }} KODE POS {{$school->kop_pos}} <br>
                TELP.{{ $school->kop_telepon }}, Email. <u style="color: blue;">{{ $school->kop_email }}
                </b>
            </b>
        </td>
    </tr>
    <tr>

    </tr>
    <tr>
        <td colspan="3" align="center">
            <hr size="0" color="black" style="margin:0px;margin-bottom:1px;">
            <hr size="2" color="black" style="margin:0px;">
        </td>
    </tr>
</table>
<br>

<body onload="window.print();" style="padding-left: 3%; padding-right: 3%">
    <div style="padding-right: 7%; padding-left: 7%;">
        <div align="center" style="margin-top:30px; font-size: 12pt;">
            <b><u>{{ $school->nama_surat }}</u></b></br>
            No: {{ $school->no_surat }}</br>
        </div>
        <br>
        <div style="text-indent: 40px; font-size: 12pt; line-height: 1.5; margin-top: 30px;">
            <p style="text-align: justify;">
                {{ $school->pembuka_surat }}
            </p>
        </div>
             
        <br>
        <table border="0" style="margin-left: 15%; line-height: 1.5">
            <tr>
                <td>NAMA </td>
                <td>:</td>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <td width="100">NIS/NISN</td>
                <td width="1">:</td>
                <td>{{ $student->nis }} / {{ $student->nisn }}</td>
            </tr>
            <tr>
                <td width="100">Kelas</td>
                <td width="1">:</td>
                <td>{{ $student->class }}</td>
            </tr>
        </table>
        <br>
        <div style="text-indent: 40px; font-size: 12pt; line-height: 1.5; margin-top: 30px;">
            <p style="text-align: justify;">
                {{ $school->penutup_surat }} 
                @if ($student->status == 1)
                    <b><u>LULUS</u></b>.
                @else
                    <b><u>TIDAK LULUS</u></b>.
                @endif
            </p>
        </div>        
        <br>
        <br>
        <br>
        <br>

        <div style="float:right;">
            {{ $school->tempat }}, {{ $school->tanggal }} <br>
            <b>{{ $school->jabatan_penandatangan }}</b> <br>
            <img src="/files/ttd/{{ $school->tanda_tangan}}" alt="" width="100"><br>
            <br>

            <b><u>{{ $school->nama_penandatangan }}</u></b><br>
            <b>NIP. {{ $school->nip_penandatangan }}</b>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
    </div>

</body>
@else
ANDA TIDAK BISA CETAK KARTU
@endif