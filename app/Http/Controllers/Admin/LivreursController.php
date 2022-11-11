<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLivreurRequest;
use App\Http\Requests\StoreLivreurRequest;
use App\Http\Requests\UpdateLivreurRequest;
use App\Models\Livreur;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class LivreursController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('livreur_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $livreurs = Livreur::with(['user', 'media'])->get();

        $users = User::where('id','>',2)->get();

        return view('admin.livreurs.index', compact('livreurs', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('livreur_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::where('id','>',2)->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.livreurs.create', compact('users'));
    }

    public function store(StoreLivreurRequest $request)
    {
        $livreur = Livreur::create($request->all());

        if ($request->input('photo', false)) {
            $livreur->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $livreur->id]);
        }

        return redirect()->route('admin.livreurs.index');
    }

    public function edit(Livreur $livreur)
    {
        abort_if(Gate::denies('livreur_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::where('id','>',2)->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $livreur->load('user');

        return view('admin.livreurs.edit', compact('livreur', 'users'));
    }

    public function update(UpdateLivreurRequest $request, Livreur $livreur)
    {
        $livreur->update($request->all());

        if ($request->input('photo', false)) {
            if (!$livreur->photo || $request->input('photo') !== $livreur->photo->file_name) {
                if ($livreur->photo) {
                    $livreur->photo->delete();
                }
                $livreur->addMedia(storage_path('tmp/uploads/' . basename($request->input('photo'))))->toMediaCollection('photo');
            }
        } elseif ($livreur->photo) {
            $livreur->photo->delete();
        }

        return redirect()->route('admin.livreurs.index');
    }

    public function show(Livreur $livreur)
    {
        abort_if(Gate::denies('livreur_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $livreur->load('user');

        return view('admin.livreurs.show', compact('livreur'));
    }

    public function destroy(Livreur $livreur)
    {
        abort_if(Gate::denies('livreur_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $livreur->delete();

        return back();
    }

    public function massDestroy(MassDestroyLivreurRequest $request)
    {
        Livreur::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('livreur_create') && Gate::denies('livreur_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Livreur();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
