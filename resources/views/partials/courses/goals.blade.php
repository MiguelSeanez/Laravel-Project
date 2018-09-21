<div class="col-12 pt-0 mt-0">
    <h2 class="text-muted"> {{ __("Metas del curso")}}</h2>
    <hr>
</div>

@forelse($goals as $goal)
    <div class="col-6">
        <card class="bg-light p-3">
            <p class="mb-0">
                {{ $goal->goal }}
            </p>
        </card>
    </div>

@empty
    <div class="alert alert-black">
        <i class="fa fa-info-circle"></i>
        {{ __("No se han escrito metas para este curso")}}
    </div>
@endforelse