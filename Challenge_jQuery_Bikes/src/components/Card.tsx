import { Bike } from "../App";

type Props = {
  bike: Bike;
};

export default function Card({ bike }: Props) {
  return (
    <div className="max-w-sm rounded overflow-hidden shadow-lg flex flex-col justify-between">
      <img
        className="w-full transition hover:scale-105 cursor-pointer"
        src={`./img/${bike.image}.png`}
        alt="Sunset in the mountains"
      />
      <div className="px-6 py-4 bg-orange-400">
        <div className="font-bold text-xl mb-2">{bike.name}</div>
        <p className=" text-base">${bike.price}</p>
      </div>
    </div>
  );
}
