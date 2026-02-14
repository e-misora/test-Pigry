<div>
    <button wire:click="openModal()" type="button" class="weight_logs__link-modal">データ追加</button>

    @if($showModal)
        <div class="modal">
            <div class="modal__inner">
                <div class="modal__logo">
                    <h2>weight logsを追加</h2>
                </div>
                <form action="/weight_logs/create" method="post">
                    <div class="modal__form-group">
                        <label>日付</label><span class="modal__form-label--required">必須</span>
                        <input class="modal__form-input--date" type="date" name="date" value="{{old('date')}}">
                    </div>
                    <div class="form-error">
                        @error('date')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label">体重</label><span class="modal__form-label--required">必須</span>
                        <input class="modal__form-input--weight" type="text" name="weight" value="{{old('weight')}}"><span>kg</span>
                    </div>
                    <div class="form-error">
                        @error('weight')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label">摂取カロリー</label><span class="modal__form-label--required">必須</span>
                        <input class="modal__form-input--calories" type="text" name="calories" value="{{old('calories')}}"><span>cal</span>
                    </div>
                    <div class="form-error">
                        @error('calories')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="modal__form-group">
                        <label class="modal__form-label">運動時間</label><span class="modal__form-label--required">必須</span>
                        <input class="modal__form-input--exercise_time" type="text" name="exercise_time" value="{{old('exercise_time')}}">
                    </div>
                    <div class="form-error">
                        @error('exercise_time')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="modal__form-group">
                    <label class="modal__form-label">運動内容</label>
                        <input class="modal__form-textarea" name="exercise_content" type="textarea" value="{{old('exercise_content')}}">
                    </div>
                    <div class="form-error">
                        @error('exercise_content')
                        {{$message}}
                        @enderror
                    </div>
                    <div class="modal__form-button">
                        <button wire:click="closeModal()" type="button" class="modal__form-button--back">戻る</button>
                        <button class="modal__form-button--submit" type="submit">登録</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
