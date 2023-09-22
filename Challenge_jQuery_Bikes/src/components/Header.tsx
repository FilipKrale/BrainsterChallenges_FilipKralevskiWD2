import logo from "../img/logo.png"

export default function Header (){


    return (<header
        className="border-slate-400 border-b-2 flex items-center justify-between py-2"
      >
        <div className="basis-1/12">
          <img src={logo} alt="Bikes Logo" className="mr-6" />
        </div>
        <ul className="basis-9/12 flex justify-between font-bold">
          <li><a href="#" className="nav-link"> Home</a></li>
          <li><a href="#" className="nav-link"> Bike</a></li>
          <li><a href="#" className="nav-link"> Gears </a></li>
          <li><a href="#" className="nav-link"> Parts</a></li>
          <li><a href="#" className="nav-link"> Tires</a></li>
          <li><a href="#" className="nav-link"> Service-Info</a></li>
          <li><a href="#" className="nav-link"> Catalogues</a></li>
          <li><a href="#" className="nav-link"> Contact</a></li>
        </ul>

        <div className="flex justify-between items-center">
          <i className="fa-solid fa-magnifying-glass fa-2x mr-4 transition-colors hover:text-orange-400 cursor-pointer"></i>
          <i className="fa-solid fa-bag-shopping fa-2x color-primary transition-colors hover:text-orange-400 cursor-pointer"></i>
        </div>
      </header>
)
}