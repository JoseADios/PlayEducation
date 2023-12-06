<div>
    <i class="fas fa-sign-out-alt me-sm-1 {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}"></i>
    <span class="d-sm-inline d-none {{ in_array(request()->route()->getName(),['profile', 'my-profile']) ? 'text-white' : '' }}" wire:click="logout">Cerrar sesion</span>
</div>
