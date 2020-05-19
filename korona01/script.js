const zmien = {


    btnZmiana : document.querySelector(".btnZmiana"),
    g : document.querySelector(".g"),
    
    init: function(){
    this.btnZmiana.addEventListener('click', function(){
        this.g.className='item g2';
    }.bind(this))
    }
    }
    
    zmien.init();

    const zmien1 = {


        btnZmiana1 : document.querySelector(".btnZmiana1"),
        g3 : document.querySelector(".g"),
        
        init: function(){
        this.btnZmiana1.addEventListener('click', function(){
            this.g3.className='item g3';
        }.bind(this))
        }
        }
        
        zmien1.init();

        const zmien2 = {


            btnZmiana2 : document.querySelector(".btnZmiana2"),
            g4 : document.querySelector(".g"),
            
            init: function(){
            this.btnZmiana2.addEventListener('click', function(){
                this.g4.className='item g4';
            }.bind(this))
            }
            }
            
            zmien2.init();

           