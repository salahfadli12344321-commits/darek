@extends('shared.app')

@section('title', 'Devenir Hôte')

@section('content')
<div class="host-hero">
      <button type="button" onclick="goBackOrHome()" class="back-icon-btn" aria-label="Retour">
            <
        </button>
    <div class="host-container">
        <div class="host-card">
            <div class="tagline" style="color:#0D2B5B; opacity:1; margin-bottom:10px;">DEVENIR HÔTE</div>

            <h2 class="host-title">Publiez votre logement</h2>
            <p class="host-sub">Remplissez les infos, on valide puis on vous contacte.</p>

            @if(session('success'))
                <div class="host-alert">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('pages.store') }}" class="host-form" enctype="multipart/form-data">
                @csrf

                <div class="host-grid">
                    <div class="field">
                        <label>Nom complet *</label>
                        <input type="text" name="nom" value="{{ old('nom') }}" placeholder="Votre nom">
                        @error('nom') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Email *</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="ex: you@mail.com">
                        @error('email') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Téléphone *</label>
                        <input type="text" name="telephone" value="{{ old('telephone') }}" placeholder="+212 ...">
                        @error('telephone') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Ville *</label>
                        <input type="text" name="ville" value="{{ old('ville') }}" placeholder="Marrakech...">
                        @error('ville') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Type de bien *</label>
                        <select name="type_bien">
                            <option value="">Choisir...</option>
                            @foreach(['Appartement','Maison','Villa','Riad'] as $t)
                                <option value="{{ $t }}" @selected(old('type_bien')===$t)>{{ $t }}</option>
                            @endforeach
                        </select>
                        @error('type_bien') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Type de location *</label>
                        <select name="type_location">
                            <option value="">Choisir...</option>
                            <option value="Nuit" @selected(old('type_location')==='Nuit')>Par nuit</option>
                            <option value="Mois" @selected(old('type_location')==='Mois')>Par mois</option>
                        </select>
                        @error('type_location') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Prix *</label>
                        <input type="number" step="0.01" name="prix" value="{{ old('prix') }}" placeholder="ex: 350">
                        @error('prix') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Devise *</label>
                        <select name="devise">
                            <option value="MAD" @selected(old('devise','MAD')==='MAD')>MAD</option>
                            <option value="EUR" @selected(old('devise')==='EUR')>EUR</option>
                            <option value="USD" @selected(old('devise')==='USD')>USD</option>
                        </select>
                        @error('devise') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Chambres *</label>
                        <input type="number" name="chambres" min="0" max="30" value="{{ old('chambres',1) }}">
                        @error('chambres') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Salles de bain *</label>
                        <input type="number" name="sdb" min="0" max="30" value="{{ old('sdb',1) }}">
                        @error('sdb') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Salons</label>
                        <input type="number" name="salons" min="0" max="30" value="{{ old('salons') }}" placeholder="ex: 1">
                        @error('salons') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field">
                        <label>Surface (m²)</label>
                        <input type="number" step="0.01" name="surface" value="{{ old('surface') }}" placeholder="ex: 85">
                        @error('surface') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field field-full">
                        <label>Adresse (optionnel)</label>
                        <input type="text" name="adresse" value="{{ old('adresse') }}" placeholder="Quartier, rue...">
                        @error('adresse') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field field-full">
                        <label>Photos (max 8) (optionnel)</label>
                        <input type="file" name="photos[]" multiple accept="image/*">
                        @error('photos') <small class="err">{{ $message }}</small> @enderror
                        @error('photos.*') <small class="err">{{ $message }}</small> @enderror
                    </div>

                    <div class="field field-full">
                        <label>Message (optionnel)</label>
                        <textarea name="message" rows="4" placeholder="Détails supplémentaires...">{{ old('message') }}</textarea>
                        @error('message') <small class="err">{{ $message }}</small> @enderror
                    </div>

                  <div class="field field-full check-wrap">
    <label class="check">
        <input type="checkbox" name="conditions" value="1" @checked(old('conditions'))>
        <span>J'accepte les conditions et la politique de confidentialité *</span>
    </label>
    @error('conditions') <small class="err">{{ $message }}</small> @enderror
</div>
                </div>

                <button class="host-btn" type="submit">Continuer</button>
            </form>
        </div>
    </div>
</div>
@endsection
