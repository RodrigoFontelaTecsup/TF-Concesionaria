<template>
    <div class="chat-message">
        <div class="flex items-end justify-end">
            <div class="flex flex-col space-y-2 text-xs max-w-xs mx-2 order-1 items-end">
                <div>
                    <span class="px-4 py-2 rounded-lg inline-block rounded-br-none bg-blue-600 text-white ">
                        {{text}}
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: "Sended",
  props: {
    text: String,
  }
}
</script>