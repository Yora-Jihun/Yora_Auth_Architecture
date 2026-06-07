<div class="bg-white rounded-xl shadow-lg border border-gray-100">
    <div class="p-6">
        <div class="mb-5">
            <h2 class="text-lg font-semibold text-gray-900 text-center">Create Account</h2>
            <p class="text-xs text-gray-500 text-center mt-1">Register to get started</p>
        </div>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(session('status')): ?>
            <div class="mb-4 p-3 bg-purple-50 border border-purple-200 text-purple-700 text-sm rounded-lg">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <form wire:submit="register" class="space-y-4">
            <div>
                <label for="first_name" class="block text-xs font-medium text-gray-700 mb-1.5">First Name</label>
                <input
                    type="text"
                    id="first_name"
                    wire:model="first_name"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="John"
                    required
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="middle_name" class="block text-xs font-medium text-gray-700 mb-1.5">Middle Name</label>
                <input
                    type="text"
                    id="middle_name"
                    wire:model="middle_name"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="Middle name (optional)"
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['middle_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="last_name" class="block text-xs font-medium text-gray-700 mb-1.5">Last Name</label>
                <input
                    type="text"
                    id="last_name"
                    wire:model="last_name"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="Doe"
                    required
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="suffix" class="block text-xs font-medium text-gray-700 mb-1.5">Suffix</label>
                <select
                    id="suffix"
                    wire:model="suffix"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                >
                    <option value="">None</option>
                    <option value="Jr.">Jr.</option>
                    <option value="Sr.">Sr.</option>
                    <option value="II">II</option>
                    <option value="III">III</option>
                    <option value="IV">IV</option>
                    <option value="V">V</option>
                </select>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['suffix'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="email" class="block text-xs font-medium text-gray-700 mb-1.5">Email Address</label>
                <input
                    type="email"
                    id="email"
                    wire:model="email"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="you@example.com"
                    required
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="password" class="block text-xs font-medium text-gray-700 mb-1.5">Password</label>
                <input
                    type="password"
                    id="password"
                    wire:model="password"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="Enter your password"
                    required
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <div>
                <label for="password_confirmation" class="block text-xs font-medium text-gray-700 mb-1.5">Confirm Password</label>
                <input
                    type="password"
                    id="password_confirmation"
                    wire:model="password_confirmation"
                    class="w-full border-0 border-b border-gray-300 px-0 py-2 text-sm shadow-none focus:border-purple-500 focus:ring-0 focus:ring-opacity-0 outline-none transition-colors duration-150"
                    placeholder="Confirm your password"
                    required
                >
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="mt-1 text-xs text-red-600"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </div>

            <button
                type="submit"
                class="w-full bg-purple-600 text-white py-2.5 rounded-lg font-medium text-sm hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2 transition-all duration-200 shadow-sm hover:shadow-md"
                wire:loading.attr="disabled"
            >
                <span wire:loading.remove>Create Account</span>
                <span wire:loading>Creating account...</span>
            </button>
        </form>

        <p class="mt-5 text-center text-xs text-gray-500">
            Already have an account?
            <a href="<?php echo e(route('login')); ?>" class="text-purple-600 hover:text-purple-700 font-medium">Sign in</a>
        </p>
    </div>
</div>
<?php /**PATH C:\Users\Jerome\Herd\Yora_Auth_Architecture\resources\views/livewire/auth/register-form.blade.php ENDPATH**/ ?>