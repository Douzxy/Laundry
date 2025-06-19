<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tracking Cucian</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.0/cdn.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
  <div class="min-h-screen flex items-center justify-center p-4" x-data="trackingApp()">
    <!-- Main Container -->
    <div class="w-full max-w-4xl bg-white rounded-3xl shadow-xl overflow-hidden relative">
      <!-- Header with waves -->
      <div class="relative h-48 bg-gradient-to-r from-cyan-500 to-cyan-600 flex items-center justify-center">
        <div class="absolute bottom-0 left-0 right-0">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full">
            <path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,181.3C384,181,480,203,576,197.3C672,192,768,160,864,165.3C960,171,1056,213,1152,218.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
          </svg>
        </div>
        <div id="washingMachine" class="relative z-10">
          <div class="w-24 h-24 bg-white rounded-full border-8 border-cyan-300 flex items-center justify-center shadow-lg">
            <div class="w-16 h-16 rounded-full bg-cyan-100 flex items-center justify-center overflow-hidden">
              <div class="w-12 h-12 bg-cyan-200 rounded-full" id="bubble"></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Content -->
      <div class="px-8 py-6">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Lacak Status Cucian Anda</h2>
        <p class="text-gray-600 text-center mb-6">Masukkan kode transaksi untuk melihat status cucian Anda</p>
        
        <!-- Input Form -->
        <div class="space-y-4">
          <div class="relative">
            <input 
              type="text" 
              x-model="transactionCode"
              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-cyan-500 transition-all pl-12"
              placeholder="Kode Transaksi"
              :class="{'border-red-500': error}"
            >
            <div class="absolute left-4 top-3.5 text-cyan-500">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
              </svg>
            </div>
          </div>
          
          <!-- Error message -->
          <div x-show="error" x-transition class="text-red-500 text-sm px-1">
            <p x-text="errorMessage"></p>
          </div>
          
          <!-- Submit Button -->
          <button 
            @click="validateAndTrack" 
            class="w-full py-3 px-4 bg-gradient-to-r from-cyan-500 to-cyan-600 text-white font-medium rounded-xl hover:shadow-lg transition duration-300 transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2"
          >
            Lacak Sekarang
          </button>
        </div>
        
        <!-- Processing animation (shown during validation) -->
        <div x-show="isProcessing" class="mt-6 flex flex-col items-center justify-center">
          <div class="w-12 h-12 border-4 border-cyan-200 border-t-cyan-500 rounded-full animate-spin"></div>
          <p class="mt-4 text-cyan-600 font-medium">Memproses...</p>
        </div>
        
        <!-- Results (shown after successful validation) -->
        <div x-show="showResults" class="mt-6 pt-6 border-t border-gray-100" x-transition>
          <h3 class="font-semibold text-lg text-gray-800 mb-4">Status Cucian</h3>
          
          <!-- Status progress -->
          <div class="relative">
            <div class="h-1 bg-gray-200 rounded-full overflow-hidden">
              <div class="h-full bg-cyan-500 transition-all duration-1000" :style="`width: ${statusPercentage}%`"></div>
            </div>
            
            <div class="flex justify-between mt-1">
              <div class="flex flex-col items-center">
                <div class="w-6 h-6 rounded-full bg-cyan-500 text-white flex items-center justify-center text-xs">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                </div>
                <span class="text-xs text-gray-600 mt-1">Diterima</span>
              </div>
              
              <div class="flex flex-col items-center">
                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs"
                     :class="statusStage >= 2 ? 'bg-cyan-500 text-white' : 'bg-gray-200 text-gray-400'">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" v-if="statusStage >= 2">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span v-else>2</span>
                </div>
                <span class="text-xs text-gray-600 mt-1">Dicuci</span>
              </div>
              
              <div class="flex flex-col items-center">
                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs"
                     :class="statusStage >= 3 ? 'bg-cyan-500 text-white' : 'bg-gray-200 text-gray-400'">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" v-if="statusStage >= 3">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span v-else>3</span>
                </div>
                <span class="text-xs text-gray-600 mt-1">Dikeringkan</span>
              </div>
              
              <div class="flex flex-col items-center">
                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs"
                     :class="statusStage >= 4 ? 'bg-cyan-500 text-white' : 'bg-gray-200 text-gray-400'">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" v-if="statusStage >= 4">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                  </svg>
                  <span v-else>4</span>
                </div>
                <span class="text-xs text-gray-600 mt-1">Siap Diambil</span>
              </div>
            </div>
          </div>
          
          <!-- Status details -->
          <div class="mt-6 bg-cyan-50 p-4 rounded-xl">
            <div class="flex items-start space-x-3">
              <div class="text-cyan-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <div>
                <h4 class="font-medium text-gray-800" x-text="statusTitle"></h4>
                <p class="text-gray-600 text-sm mt-1" x-text="statusDescription"></p>
                <p class="text-cyan-600 text-sm mt-3" x-show="estimatedTime">
                  Perkiraan selesai: <span x-text="estimatedTime"></span>
                </p>
              </div>
            </div>
          </div>
          
          <!-- Call to action -->
          <div class="mt-6">
            <button 
              @click="backToTracking" 
              class="w-full py-2.5 px-4 border border-cyan-500 text-cyan-600 font-medium rounded-xl hover:bg-cyan-50 transition duration-200 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2"
            >
              Lacak Cucian Lain
            </button>
          </div>
        </div>
      </div>
      
      <!-- Footer -->
      <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 text-center">
        <p class="text-sm text-gray-600">
          Butuh bantuan? Hubungi kami di <a href="#" class="text-cyan-600 font-medium">0812-3456-7890</a>
        </p>
      </div>
    </div>
  </div>

  <script>
    function trackingApp() {
      return {
        transactionCode: '',
        error: false,
        errorMessage: '',
        isProcessing: false,
        showResults: false,
        statusStage: 1,
        statusPercentage: 25,
        statusTitle: '',
        statusDescription: '',
        estimatedTime: '',
        
        validateAndTrack() {
          // Reset states
          this.error = false;
          
          // Validation
          if (!this.transactionCode) {
            this.error = true;
            this.errorMessage = 'Kode transaksi tidak boleh kosong';
            return;
          }
          
          if (this.transactionCode.length < 5) {
            this.error = true;
            this.errorMessage = 'Kode transaksi minimal 5 karakter';
            return;
          }
          
          // Show processing state
          this.isProcessing = true;
          
          // Simulate server request
          setTimeout(() => {
            this.isProcessing = false;
            
            // Determine status based on transaction code (just for demo)
            const lastChar = this.transactionCode.slice(-1);
            const lastDigit = parseInt(lastChar, 10);
            
            if (isNaN(lastDigit)) {
              this.statusStage = 1;
            } else {
              this.statusStage = Math.min(4, Math.max(1, lastDigit % 5 + 1));
            }
            
            // Update status details
            this.updateStatusDetails();
            
            // Show results
            this.showResults = true;
          }, 1500);
        },
        
        updateStatusDetails() {
          switch(this.statusStage) {
            case 1:
              this.statusPercentage = 25;
              this.statusTitle = 'Cucian Diterima';
              this.statusDescription = 'Cucian Anda telah diterima dan sedang dalam antrian untuk dicuci.';
              this.estimatedTime = 'Hari ini, 18:00 WIB';
              break;
            case 2:
              this.statusPercentage = 50;
              this.statusTitle = 'Sedang Dicuci';
              this.statusDescription = 'Cucian Anda sedang dalam proses pencucian.';
              this.estimatedTime = 'Hari ini, 16:30 WIB';
              break;
            case 3:
              this.statusPercentage = 75;
              this.statusTitle = 'Sedang Dikeringkan';
              this.statusDescription = 'Cucian Anda telah selesai dicuci dan sedang dalam proses pengeringan.';
              this.estimatedTime = 'Hari ini, 15:00 WIB';
              break;
            case 4:
              this.statusPercentage = 100;
              this.statusTitle = 'Siap Diambil';
              this.statusDescription = 'Cucian Anda telah selesai dan siap untuk diambil di toko kami.';
              this.estimatedTime = '';
              break;
          }
        },
        
        backToTracking() {
          this.showResults = false;
          this.transactionCode = '';
        }
      }
    }
    
    // Animation for washing machine
    document.addEventListener('DOMContentLoaded', function() {
      // Animate washing machine bubble
      gsap.to("#bubble", {
        rotation: 360,
        duration: 4,
        ease: "linear",
        repeat: -1
      });
      
      // Slight bounce effect for washing machine
      gsap.to("#washingMachine", {
        y: -10,
        duration: 1.5,
        repeat: -1,
        yoyo: true,
        ease: "power1.inOut"
      });
    });
  </script>
</body>
</html>