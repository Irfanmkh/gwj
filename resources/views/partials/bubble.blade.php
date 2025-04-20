    <div x-data="dragBubble()" x-init="init()" @mousedown="startDrag($event)" @mousemove.window="onDrag($event)"
        @mouseup.window="stopDrag()" class="fixed z-50" :style="`left: ${x}px; top: ${y}px`" style="cursor: grab;">
        <div
            class="bg-white/50 backdrop-blur-md border border-white/30 shadow-xl rounded-full px-4 py-2 flex items-center gap-2 transition-transform duration-300 hover:scale-105">

            <select class="bg-transparent text-sm outline-none text-gray-800 font-semibold cursor-pointer"
                @change="$dispatch('change-language', $event.target.value)">
                <option value="en"> EN</option>
                <option value="id"> ID</option>
            </select>
        </div>
    </div>

    <script>
        function dragBubble() {
            return {
                x: 20,
                y: 20,
                dragging: false,
                offsetX: 0,
                offsetY: 0,

                init() {
                    const savedX = localStorage.getItem('bubbleX');
                    const savedY = localStorage.getItem('bubbleY');
                    if (savedX && savedY) {
                        this.x = parseInt(savedX);
                        this.y = parseInt(savedY);
                    }
                },

                startDrag(e) {
                    if (e.target.tagName.toLowerCase() === 'select') return;
                    this.dragging = true;
                    this.offsetX = e.clientX - this.x;
                    this.offsetY = e.clientY - this.y;
                },

                onDrag(e) {
                    if (!this.dragging) return;
                    this.x = e.clientX - this.offsetX;
                    this.y = e.clientY - this.offsetY;
                },

                stopDrag() {
                    this.dragging = false;
                    localStorage.setItem('bubbleX', this.x);
                    localStorage.setItem('bubbleY', this.y);
                }
            }
        }
    </script>
