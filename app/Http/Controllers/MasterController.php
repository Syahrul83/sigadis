<?php

namespace App\Http\Controllers;

use App\Models\Master;
use Illuminate\Http\Request;
use File;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg = $request->reg;
        //  dd($reg);
        $file = $request->file('file');
        //  dd($file->getClientOriginalName());
        if ($file) {
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension(); //Get extension of uploaded file
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize(); //Get size of uploaded file in bytes
            //Check for file extension and size
            $this->checkUploadedFileProperties($extension, $fileSize);
            //Where uploaded file will be stored on the server
            $location = 'uploads'; //Created an "uploads" folder for that
            // Upload file
            $file->move($location, $filename);
            // In case the uploaded file path is to be stored in the database
            $filepath = public_path($location . '/' . $filename);
            // Reading file
            $file = fopen($filepath, 'r');
            $importData_arr = []; // Read through the file and store the contents as an array
            $i = 0;
            //Read the contents of the uploaded file
            while (($filedata = fgetcsv($file, 1000, ',')) !== false) {
                $num = count($filedata);
                // Skip first row (Remove below comment if you want to skip the first row)
                if ($i == 0) {
                    $i++;
                    continue;
                }
                for ($c = 0; $c < $num; $c++) {
                    $importData_arr[$i][] = $filedata[$c];
                }
                $i++;
            }
            fclose($file); //Close after reading
            //  dd($importData_arr);
            foreach ($importData_arr as $importData) {
                Master::create([
                    'masterawal_id' => $reg,
                    'id_ap2t' => $importData[1] == '' ? null : $importData[1],
                    'id_nama' => $importData[2] == '' ? null : $importData[2],
                    'alamat' => $importData[3] == '' ? null : $importData[3],
                    'lintang' => $importData[4] == '' ? null : $importData[4],
                    'bujur' => $importData[5] == '' ? null : $importData[5],
                    'konstruksi' =>
                        $importData[6] == '' ? null : $importData[6],
                    'trafo' => $importData[7] == '' ? null : $importData[7],
                    'penyulang' => $importData[8] == '' ? null : $importData[8],
                    'rayon' => $importData[9] == '' ? null : $importData[9],
                    'merek' => $importData[10] == '' ? null : $importData[10],
                    'ns_trafo' =>
                        $importData[11] == '' ? null : $importData[11],
                    'tahun' => $importData[12] == '' ? 0 : $importData[12],
                    'tipe' => $importData[13] == '' ? null : $importData[13],
                    'kapasitas' => $importData[14] == '' ? 0 : $importData[14],
                    'jenis_pel' =>
                        $importData[15] == '' ? null : $importData[15],
                    'status_op' =>
                        $importData[16] == '' ? null : $importData[16],
                    'revisi_travo' =>
                        $importData[17] == '' ? null : $importData[17],
                    'aktif' => 1,
                ]);
            }

            // $file_path = url('/uploads/' . $filename);
            //dd($file_path);
            unlink($filepath);

            return redirect()
                ->back()
                ->with('success', 'berhasil di upload');
        } else {
            return redirect()
                ->back()
                ->with('success', 'gagal di upload');
        }
    }

    public function checkUploadedFileProperties($extension, $fileSize)
    {
        $valid_extension = ['csv']; //Only want csv and excel files
        $maxFileSize = 2097152; // Uploaded file size limit is 2mb
        if (in_array(strtolower($extension), $valid_extension)) {
            if ($fileSize <= $maxFileSize) {
            } else {
                return redirect()
                    ->back()
                    ->with('success', 'Data upload csv terlalu besar');
            }
        } else {
            return redirect()
                ->back()
                ->with('success', 'tipe data tidak sesuai');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */

    public function downloadFile()
    {
        $filepath = public_path('file/form_trafo_up3.xlsx');
        return Response()->download($filepath);
    }
    public function show()
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function edit(Master $master)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Master $master)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Master  $master
     * @return \Illuminate\Http\Response
     */
    public function destroy(Master $master)
    {
        //
    }
}